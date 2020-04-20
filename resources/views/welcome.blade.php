@extends('layouts.app')

@section('style')
    <style>
        body {
            background: url(https://images.pexels.com/photos/305821/pexels-photo-305821.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260);
            background-size:     cover;                      
            background-repeat:   no-repeat;
            background-position: center center;   
        }
    </style>
@endsection

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md mx-4">
            <i>from&ensp;</i><strong class="strong">Shop</strong>
            <i> select&ensp;</i>shops
        </div>

        <div class="links m-b-md">
            <a href="{{ route('products') }}">Products</a>
            <a href="https://github.com/pankamyk/">My GitHub</a>
        </div>

        <div class="container">
            <div class="links">
                <p style="color: #000000">
                    Welcome in my ecommerce mockup! This site was designed for maximal pleasure with minimal bloat and with my sys-int course in mind. In our shop you'll find first grade shops! Whatever you need - we have it: supermarkets, fast-food chains, small shops! So check out out products or register now FOR FREE!
                </p>
            </div>
        </div>
    </div>
</div>
@endsection


