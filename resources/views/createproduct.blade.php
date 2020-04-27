@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">Employee / products / create</div>

                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Product name">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Ammount</label>
                            <input type="number" class="form-control" id="exampleFormControlInput2" min="1" max="100">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput">Image</label>
                            <input type="file" class="form-control" id="exampleFormControlInput">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput3">Price</label>
                            <input type="number" class="form-control" id="exampleFormControlInput2" min="0">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Category</label>
                            <select multiple class="form-control" id="exampleFormControlSelect2">
                                <option>Supermarkets</option>
                                <option>Medium shops</option>
                                <option>Small buisenesses</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info my-2 my-sm-0" type="submit">Submit</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection