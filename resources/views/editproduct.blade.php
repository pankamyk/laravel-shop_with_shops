@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">Employee / products / create</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('products.update', $product->id) }}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Product name" value="{{ $product->name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="detail">Details</label>
                            <input id="details" name="details" value="{{ $product->details }}"  type="text" class="form-control " placeholder="Product details" required>
                        </div>

                        <div class="form-group">
                            <label for="ammount">Ammount</label>
                            <input type="number" class="form-control" name="ammount" id="ammount" min="1" max="100" required>
                        </div>
                        <div class="form-group">
                            <label for="url">Image</label>
                            <input type="text" class="form-control" id="url" value="{{ $product->url }}"  name="url" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" name="price" id="price" min="0" value="{{ $product->price }}"  required>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <input type="number" class="form-control" name="category" id="category" value="{{ $product->category }}"  required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $product->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info my-2 my-sm-0" type="submit">Submit</button>
                        </div>
                        
                    </form>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
