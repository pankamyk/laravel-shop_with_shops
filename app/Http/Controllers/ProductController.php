<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;

use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();

        return view('products', compact('products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        return view('product', compact('product'));
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);

        $items = Session::has('items') ? Session::get('items') : [];
        $total = Session::has('total') ? Session::get('total') : 0;
        array_push($items, $product);
        $total += $product->price;
        

        Session::put('items', $items);
        Session::put('total', $total);
        return redirect()->route('products');
    }
}
