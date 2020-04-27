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
                                    <th>Date</th>
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
                                <tr>
                                    <td>1</td>
                                    <td>DPD</td>
                                    <td>Cash</td>
                                    <td>cheki@breki.com</td>
                                    <td>
                                        <span class="badge badge-success">Delivered</span>
                                    </td>
                                    <td>1-11-2019</td>
                                    <td><button class="btn btn-outline-info my-2 my-sm-0" type="submit">Show</button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Personal</td>
                                    <td>Cash</td>
                                    <td>adam@example.com</td>
                                    <td>
                                        <span class="badge badge-info">Processing</span>
                                    </td>
                                    <td>1-11-2019</td>
                                    <td><button class="btn btn-outline-info my-2 my-sm-0" type="submit">Show</button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>DPD</td>
                                    <td>Cash</td>
                                    <td>janina0@example.com</td>
                                    <td>
                                        <span class="badge badge-danger">Aborted</span>
                                    </td>
                                    <td>1-11-2019</td>
                                    <td><button class="btn btn-outline-info my-2 my-sm-0" type="submit">Show</button></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Personal</td>
                                    <td>Card</td>
                                    <td>uganda69@example.com</td>
                                    <td>
                                        <span class="badge badge-info">Processing</span>
                                    </td>
                                    <td>1-11-2019</td>
                                    <td><button class="btn btn-outline-info my-2 my-sm-0" type="submit">Show</button></td>
                                </tr>
                                {{-- 
                                    @forelse ($orders as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->details }}</td>
                                        <td>{{ $item->id }}</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-warning">Edit</button>
                                            <button type="button" class="btn btn-sm btn-danger">Del</button>
                                            <button type="button" class="btn btn-sm btn-info">Show</button>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection