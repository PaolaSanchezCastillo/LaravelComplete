<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use  App\Models\Product;
use  App\Models\Categories;
use Illuminate\Http\RedirectResponse;
use App\Exports\ProductExport;
use Excel;

use Illuminate\Http\Request;
//use Request;

class ProductsController extends Controller
{
    public function index(){

           //return $products =  Product::all();

           $products =  Product::select('ProductID', 'ProductName', 'Categories.CategoryName', 'UnitPrice', 'UnitsInStock' )
                              ->join('Categories', 'Products.CategoryID', '=', 'Categories.CategoryID')
                              ->where('Discontinued', '=', 0)
                              ->get();
            
           
        return View::make('products.index')->with('products', $products);

    }

    public function export(){
        return Excel::download(new ProductsController, 'productos.xlsx');
    }

    public function exportProduct(){
        return Excel::download(new ProductExport, 'productos2.xlsx');
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

      $categoryID = Categories::select('CategoryID')
        ->where('CategoryName',$categoryName)
        ->first();
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


    public function eliminaProducto($id){
        $elimina = Product::where('ProductID', $id )->first(); 
       // Soft Delete (El metodo ideal)
        if($elimina){
           $softDelete =  Product::where('ProductID', $id )
           ->update(['Discontinued'=> 1]); 
        }
        else{
            return "Error"; 
        // Hard Delete (no recomendado)
            $eliminacion = Product::where('ProductID', $id )
            ->delete($id); 
        }


        if($softDelete >=1){
            return redirect('/indexProducts');       
        }

    }


}
