<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use  App\Models\Product;
use  App\Models\Categories;
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;
//use Request;

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

    public function update(Request $request){
       
         $request->all();

        $id = $request->input('id'); 
        $productName = $request->input('productName'); 
        $categoryName = $request->input('categoryName'); 

    return  $categoryID = Categories::select('CategoryID')
        ->where('CategoryName',$categoryName)
        ->get();

         

        $unitPrice = $request->input('unitPrice'); 
        $unitsInStock = $request->input('unitsInStock'); 



       
       $validate =  $request->validate([
            'productName' => 'required', 
            'categoryName'=> 'required', 
            'unitPrice' => 'required|min:0.01|max:10000',
            'unitsInStock' => 'required'

        ]);



    $update = Product::where('ProductID', $id)
               // ->get();
             ->update([ 'ProductName' => $productName,
                'CategoryID' => $categoryID->CategoryID, 
                'UnitPrice' => $unitPrice, 
                'UnitsInStock' => $unitsInStock
             ]);

       return redirect('/indexProducts');       
        
    }


}
