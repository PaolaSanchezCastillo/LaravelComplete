<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  //  use HasFactory;

  protected $table = 'products'; 

  protected $fillable = [
    'ProductID', 'ProductName', 'SupplierID', 'CategoryID',
    'QuantityPerUnit', 'UnitPrice', 'UnitsInStock', 'UnitsOnOrder',
    'ReorderLevel','Discontinued','updated_at'

  ];
}
