@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">Employee / orders</div>

                <div class="card-body">
                    <div class="table-responsive-xl">
                        <table class="table table-sm table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Delivery</th>
                                    <th>Payment</th>
                                    <th>Client</th>
                                    <th>Status</th>
                                    <th>Products</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <form class="form-inline my-2 my-lg-0">
                                        <th>
                                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                        </th>
                                        <th>
                                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                        </th>
                                        <th>
                                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                        </th>
                                        <th>
                                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                        </th>
                                        <th>
                                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                        </th>
                                        <th>
                                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                        </th>
                                        <th><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button></th>
                                    </form>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($orders as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->delivery }}</td>
                                        <td>{{ $item->payment }}</td>
                                        <td>{{ $item->person }}</td>
                                        <td><span class="badge badge-success">Ordered</span></td>
                                        <td>{{ $item->products }}</td>
                                        <td>
                                            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Show</button>
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
