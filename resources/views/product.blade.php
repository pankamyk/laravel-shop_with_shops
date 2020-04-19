@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col">
            <img class="card-img-top" src="https://i.ytimg.com/vi/78mYkbfsXRM/maxresdefault.jpg" alt="Card image cap">
        </div>
        <div></div>
        <div class="col">
            <table style="height: 100%; width:100%;">
                <tbody>
                    <tr>
                        <th class="text-center">
                            <h1>{{ $product->name }}</h1>
                        </th>
                    </tr>
                    <tr>
                        <th class="text-center">
                            <h3>{{ $product->details }}</h3>
                        </th>
                    </tr>
                    <tr>
                        <th class="text-center">
                            <a href="#" class="btn btn-outline-danger">Add to cart!</a>
                        </th>
                    </tr>
                </tbody>
            </table>   
        </div>
    </div>
    <div class="row my-4">
        <table class="table">
            <thead class="thead-dark text-center">
              <tr>
                <th scope="col" class="col-sm-1">Feature</th>
                <th scope="col" class="col-sm-1">Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="col-sm-1">Description</td>
                <td class="col-sm-1">{{ $product->description }}</td>
              </tr>
              <tr>
                <td class="col-sm-1">Price</td>
                <td class="col-sm-1">{{ $product->price }}$</td>
              </tr>
              <tr>
                <td class="col-sm-1">Category</td>
                <td class="col-sm-1">{{ $product->category }}</td>
              </tr>
            </tbody>
          </table>
    </div>
</div>
@endsection