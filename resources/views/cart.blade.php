@extends('layouts.app')

@section('content')
<div class="container">
    @if ($products)

    <div class="row">
        <div class="col-md-9">
            <form action="{{ route('update') }}" method="GET">
                <div class="card">
                    <div class="card-header">
                        Products
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Details</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Ammount</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($products as $item)

                                <tr>
                                    <th>{{ $item->name }}</th>
                                    <th>{{ $item->details }}</th>
                                    <th>{{ $item->price }}</th>
                                    <th>
                                        <input type="number" id="ammount{{ $item->id }}" name="ammount{{ $item->id }}" min="0" max="50" step="1" value="{{ Session::get('items')[$item->id] }}"> 
                                    </th>
                                </tr>

                                @endforeach
                            
                            </tbody>
                        </table>
                        </div>
                        <input class="btn btn-outline-danger" type="submit" value="Update cart">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3">
            <div class="card bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Cart info</div>
                <div class="card-body">
                  <h5 class="card-title">{{ Session::get('total') }}$</h5>
                  <a href="{{ route('order') }}" class="btn btn-outline-danger">Go to checkout</a>
                </div>
            </div>       
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