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
        $ammount = Session::has('ammount') ? Session::get('ammount') : 0;

        if (array_key_exists($id, $items)) 
        {
            $items[$id] += 1;
        } 
        else 
        {
            $items[$id] = 1;
        }

        $total += $product->price;
        $ammount += 1;

        Session::put('items', $items);
        Session::put('total', $total);
        Session::put('ammount', $ammount);
        
        return redirect()->route('products');
    }

    public function getCart(Request $request)
    {
        if (Session::has('items')) 
        {
            $ids = array_keys(Session::get('items'));
            $products = Product::find($ids);
        } 
        else 
        {
            $products = null;
        }
        
        return view('cart', compact('products'));
    }
}
