@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-center">
                            Categories
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="transform: rotate(0);">
                        <td class="text-center">
                            <a href="#" class="stretched-link text-dark">Supermarkets</a> 
                        </td>
                    </tr>
                    <tr style="transform: rotate(0);">
                        <td class="text-center">
                            <a href="#" class="stretched-link text-dark">Medium area</a>
                        </td>
                    </tr>
                    <tr style="transform: rotate(0);">
                        <td class="text-center">
                            <a href="#" class="stretched-link text-dark">Small shops</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-sm-9">
            <div class="d-flex flex-wrap">
                
                @foreach ($products as $product)
                    <!-- Card -->
                    <div class="card m-2" style="width: 18rem;">
                        <!-- Card image -->
                        <img class="card-img-top" src="https://i.ytimg.com/vi/78mYkbfsXRM/maxresdefault.jpg" alt="Card image cap">
                        <!-- Card content -->
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title"><a>{{ $product->name }}</a></h4>
                            <!-- Text -->
                            <p class="card-text">
                                {{ $product->details }}
                            </p>

                            <h6>{{ $product->price }}$</h6>

                            <a href="/products/{{ $product->id }}" class="btn btn-outline-danger">View product</a>                
                        </div>
                    </div>
                    <!-- Card -->
                @endforeach

            </div>
        </div>
    </div>
</div>

@endsection