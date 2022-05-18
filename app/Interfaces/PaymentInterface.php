<?php

namespace App\Interfaces;

interface PaymentInterface{

    public static function GetPaymentIdByType($payment_type);
}