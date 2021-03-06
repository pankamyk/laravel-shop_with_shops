@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">Employee / products / create</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('products.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Product name" required>
                        </div>

                        <div class="form-group">
                            <label for="detail">Details</label>
                            <input id="details" name="details" type="text" class="form-control " placeholder="Product details" required>
                        </div>

                        <div class="form-group">
                            <label for="ammount">Ammount</label>
                            <input type="number" class="form-control" name="ammount" id="ammount" min="1" max="100" required>
                        </div>
                        <div class="form-group">
                            <label for="url">Image</label>
                            <input type="text" class="form-control" id="url" name="url" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" name="price" id="price" min="0" required>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select multiple class="form-control" name="category" id="category" required>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
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
