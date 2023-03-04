<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use  App\Models\Product;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){

           //return $products =  Product::all();

           $products =  Product::select('ProductID', 'ProductName', 'Categories.CategoryName', 'UnitPrice', 'UnitsInStock' )
                              ->join('Categories', 'Products.CategoryID', '=', 'Categories.CategoryID')
                              ->get();
           
        return View::make('products.index')->with('products', $products);
    }

    public function edit($id){
            $product = Product::select('ProductID', 'ProductName', 'Categories.CategoryName', 'UnitPrice', 'UnitsInStock' )
       ->join('Categories', 'Products.CategoryID', '=', 'Categories.CategoryID')
       ->where('ProductID', $id)
       ->get();

        return View('products.edit',compact('product'));

    }


}
