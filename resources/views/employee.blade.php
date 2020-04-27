@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Employee</div>
                
                {{-- 
                    <table class="table table-sm table-striped">
                        <tbody>
                            @forelse ($products as $item)
                                <tr>
                                    <th>{{ $item->name }}</th>
                                    <td>{{ $item->details }}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-info">Show</button>
                                        <button type="button" class="btn btn-sm btn-warning">Edit</button>
                                        <button type="button" class="btn btn-sm btn-danger">Del</button>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                    --}}
                

                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <li class="nav-link">
                                    <a class="nav-link" href="{{ route('products.index') }}">Manage Produts</a>
                                </li>
                            </div>
                            <div class="col-sm">
                                <li class="nav-link">
                                    <a class="nav-link" href="{{ route('orders.index') }}">Manage Orders</a>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection