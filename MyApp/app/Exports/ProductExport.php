<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use  App\Models\Product;
use  App\Models\Categories;

class ProductExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
    }

    public function view(): View{

        $products =  Product::select('ProductID', 'ProductName', 'Categories.CategoryName', 'UnitPrice', 'UnitsInStock' )
        ->join('Categories', 'Products.CategoryID', '=', 'Categories.CategoryID')
        ->where('Discontinued', '=', 0)
        ->get();
        return view('products.lista',['products' => $products
        ]);
    }
}
