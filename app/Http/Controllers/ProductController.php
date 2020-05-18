<?php

namespace App\Http\Controllers;

use App\Order;
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
        $num = $request->input('ammount');

        $items = Session::has('items') ? Session::get('items') : [];
        $total = Session::has('total') ? Session::get('total') : 0;
        $ammount = Session::has('ammount') ? Session::get('ammount') : 0;

        if (array_key_exists($id, $items)) 
        {
            $items[$id] += $num;
        } 
        else 
        {
            $items[$id] = $num;
        }

        $total += $product->price*$num;
        $ammount += $num;

        Session::put('items', $items);
        Session::put('total', $total);
        Session::put('ammount', $ammount);
        
        return redirect()->route('products');
    }

    public function updateCart(Request $request)
    {
        $items = Session::has('items') ? Session::get('items') : [];
        
        $ret_items = [];
        $ammount = 0;
        $total = 0;

        foreach ($items as $key => $value) {
            if ($request->input("ammount$key") > 0) {
                $ret_items[$key] = $request->input("ammount$key");
                $ammount += $request->input("ammount$key");
                $total +=$request->input("ammount$key") * Product::find($key)->price;
            }
        }

        Session::put('items', $ret_items);
        Session::put('total', $total);
        Session::put('ammount', $ammount);

        $ids = array_keys($ret_items);
        $products = Product::find($ids);

        return view('cart', compact('products'));
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

    public function getOrder(Request $request)
    {
        if (Session::has('items')) 
        {
            $total = Session::get('total');
            $ammount = Session::get('ammount');
        } 
        else 
        {
            $total = null;
            $ammount = null;
        }
        
        return view('order', [
            'total' => $total,
            'ammount' => $ammount
        ]);
    }

    public function postOrder(Request $request)
    {
        $order = new Order;

        $order->person = $request->email;
        $order->delivery = $request->delivery . ';' . $request->address . ';' . $request->postalcode;
        $order->payment = $request->payment;
        $order->products = json_encode(Session::get('items'));

        $order->save();
        
        $request->session()->flush();

        return redirect()->route('products');
    }
}








