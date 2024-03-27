<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function viewProducts(){
   $products = Product::select('*')
             ->get();
   return view('viewProducts', ['products' => $products]);
    }
    
    public function addProduct()
    {
        return view('addProduct');
    }

    public function saveProduct(Request $request)
    {
        $santri = Product::create([
            'nm_product' => $request->nm_santri,
            'desc_product' => $request->desc_product,
            'category' => $request->category,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ]);

        return redirect()->route('viewProducts');

    }
}
