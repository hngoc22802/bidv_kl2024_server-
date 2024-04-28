<?php

namespace App\Library\QueryBuilder\Filters\Custom;

use App\Library\QueryBuilder\Filters\Filter;
use App\Library\QueryBuilder\Filters\FilterParams;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

class FilterDateRange implements Filter
{
    protected $date_format;
    protected $is_get_null;
    public function __construct($date_format = null, $is_get_null = false)
    {
        $this->date_format = $date_format;
        $this->is_get_null = $is_get_null;
    }
    public function __invoke(Builder $query, FilterParams $params, string $property)
    {
        $query->where(function ($query) use ($params, $property) {
            $value = is_array($params->getValue()) ? $params->getValue() : explode(",", $params->getValue());
            if (!isset($value)) {
                return;
            }
            $date_filter_start =  $this->date_format ? Carbon::createFromFormat($value[0], $value) : Carbon::parse($value[0]);
            if (count($value) == 1) {
                $query->whereDate($property, '>=', $date_filter_start->startOfDay());
            } else {
                $date_filter_end = $this->date_format ? Carbon::createFromFormat($value[1], $value) : Carbon::parse($value[1]);
                if ($date_filter_start > $date_filter_end) {
                    $temp = $date_filter_start;
                    $date_filter_start = $date_filter_end;
                    $date_filter_end = $temp;
                }
                $date_filter = [$date_filter_start->startOfDay(), $date_filter_end->endOfDay()];
                $query->whereBetween($property, $date_filter);
            }
            if ($this->is_get_null) {
                $query->orWhereNull($property);
            }
        });
    }
}
