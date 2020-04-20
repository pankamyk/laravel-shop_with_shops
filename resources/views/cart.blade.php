@extends('layouts.app')

@section('content')
<div class="container">
    @if ($products)

    <div class="row">
        <div class="col-md-10">
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
                            <form>
                                <input type="number" id="ammount" name="ammount" min="0" max="50" step="1" value="{{ Session::get('items')[$item->id] }}"> 
                            </form>
                        </th>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>

        <div class="col-md-2">
            <div class="col">
                <h3>
                    {{ Session::get('total') }}$
                </h3>
                <a href="#" class="btn btn-outline-danger">Go to checkout</a>
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