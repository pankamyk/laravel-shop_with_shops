<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EmployeeProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('employeeproducts', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:55'],
            'details' => ['required', 'string', 'max:255'],
            'price' => ['required', 'integer'],
            'category' => ['required', 'integer'],
            'description' => ['required', 'string', 'max:355'],
            'url' => ['required', 'string', 'max:155'],
        ]);
        
        $product = new Product;    

        $product->name = $validatedData['name'];
        $product->details = $validatedData['details'];
        $product->url = $validatedData['url'];
        $product->price = $validatedData['price'];
        $product->category = $validatedData['category'];
        $product->description = $validatedData['description'];

        $product->save();

        return Redirect::to('employee/products');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('editproduct', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:55'],
            'details' => ['required', 'string', 'max:255'],
            'price' => ['required', 'integer'],
            'category' => ['required', 'integer'],
            'description' => ['required', 'string', 'max:355'],
            'url' => ['required', 'string', 'max:155'],
        ]);

        $product = Product::find($id);

        $product->name = $validatedData['name'];
        $product->details = $validatedData['details'];
        $product->url = $validatedData['url'];
        $product->price = $validatedData['price'];
        $product->category = $validatedData['category'];
        $product->description = $validatedData['description'];

        $product->save();

        return Redirect::to('employee/products');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return Redirect::to('employee/products');
    }
}
