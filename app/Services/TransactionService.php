<?php

namespace App\Services;

use App\Models\Transaction;

/**
 * Class TransactionService.
 */
class TransactionService
{

    public static function getNumOfSalesById($id){
        return Transaction::where('seller_id', $id)->get()->count();
    }

    public static function getNumOfPurchasesById($id){
        return Transaction::where('buyer_id', $id)->get()->count();
    }

}
