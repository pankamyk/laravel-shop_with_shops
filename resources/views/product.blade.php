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
                            <h1><strong>{{ $product->name }}</strong></h1>
                        </th>
                    </tr>
                    <tr>
                        <th class="text-center">
                            <h3><em>{{ $product->details }}</em></h3>
                        </th>
                    </tr>
                    <tr>
                        <th class="text-center">
                        <a href="{{ route('product.addtocart', ['id' => $product->id]) }}" class="btn btn-outline-danger">Add to cart!</a>
                        </th>
                    </tr>
                </tbody>
            </table>   
        </div>
    </div>
    
    <div class="row my-4">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="col-sm-1">Feature</th>
                    <th scope="col" class="col-sm-1">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="col-sm-1">Description</td>
                    <td class="col-sm-1"><strong>{{ $product->description }}</strong></td>
                </tr>
                <tr>
                    <td class="col-sm-1">Price</td>
                    <td class="col-sm-1"><em>{{ $product->price }}$</em></td>
                </tr>
                <tr>
                    <td class="col-sm-1">Category</td>
                    <td class="col-sm-1">{{ $product->category }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="row my-4">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://news.gandi.net/wp-content/uploads/2017/09/2017_08_shop-1024x512.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://i.ytimg.com/vi/78mYkbfsXRM/maxresdefault.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://steamuserimages-a.akamaihd.net/ugc/91596291476663986/0CFEED01BDEDB55784D455CFC6072928FC74C2ED/" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection