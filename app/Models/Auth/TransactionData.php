<?php

namespace App\Models\Auth;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Model;

class TransactionData extends Model
{
    protected $table = 'transaction_data';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'account_number',
        'bank_name',
        'note',
        'postage',
        'transaction_type',
        'value'
    ];
}
