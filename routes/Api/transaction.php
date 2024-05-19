<?php

use App\Http\Controllers\Api\Transaction\TransactionController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post('transaction', [TransactionController::class, 'bankTransactions']);
    Route::post('check-otp-transaction', [TransactionController::class, 'acceptOtpBankTransaction']);
    Route::post('transaction-data', [TransactionController::class, 'transactionData']);
    Route::post('sent-otp-tran', [TransactionController::class, 'sentOptTran']);
    Route::get('show/{id}', [TransactionController::class, 'show']);

});
