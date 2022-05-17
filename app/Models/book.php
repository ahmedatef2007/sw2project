<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    public static function getBookNameById($id){
        return Book::where('id', $id)->pluck('name')->first();
    }
    public static function getBookCostById($id){
        return Book::where('id', $id)->pluck('cost')->first();
    }
}
