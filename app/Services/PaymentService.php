<?php

namespace App\Services;
use App\Interfaces\PaymentInterface;
use Illuminate\Support\Facades\DB;
use App\Models\Payment;
/**
 * Class PaymentService.
 */
class PaymentService
{
    public static function GetPaymentIdByType($payment_type){

        return Payment::where('payment_type',$payment_type)->pluck('id')->first();

    }
}
