@extends('layouts.app')

@section('content')
<div class="container">
    @if (Session::has('items'))

    <div class="row">
        <div class="col-md-9 d-flex justify-content-center">
            <ul class="list-group list-group-flush">

                @foreach (Session::get('items') as $item)
        
                <li class="list-group-item">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h3>{{ $item->name }}</h3>
                            </div>
                            <div class="col">
                                <h6>{{ $item->details }}</h6>
                            </div>
                            <div class="col">
                                <h6>{{ $item->price }}$</h6>
                            </div>
                        </div>
                    </div>
                </li>
        
                @endforeach
        
            </ul>
        </div>
        <div class="col-md-3">
            <h3>
                {{ Session::get('total') }}$
            </h3>
            <a href="#" class="btn btn-outline-danger">Go to checkout</a>
        </div>
    </div>

    @else
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Your cart is empty!
            </div>
        </div>
    </div>
    @endif
</div>
@endsection