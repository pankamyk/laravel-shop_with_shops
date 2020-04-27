@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">Employee / products</div>

                <div class="card-body">
                    
                    <div class="container flex-center">
                        <li class="nav-link">
                            <a class="nav-link" href="{{ route('products.create') }}">Add Product</a>
                        </li>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <form class="form-inline my-2 my-lg-0">
                                        <th colspan="3">
                                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                        </th>
                                        <th>
                                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                        </th>
                                    </form>
                                </tr>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>ID</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->details }}</td>
                                        <td>{{ $item->id }}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="actions">
                                                <button type="button" class="btn btn-sm btn-warning">Edit</button>
                                                <button type="button" class="btn btn-sm btn-danger">Del</button>
                                                <button type="button" class="btn btn-sm btn-info">Show</button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
