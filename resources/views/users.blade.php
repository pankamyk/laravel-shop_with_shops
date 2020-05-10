@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
                <div class="card-header">Admin / users</div>

                <div class="card-body">
                    <div class="container flex-center">
                        <li class="nav-link">
                            <a class="nav-link" href="{{ route('users.create') }}">Add User</a>
                        </li>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Admin?</th>
                                    <th>Employee?</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->is_admin }}</td>
                                        <td>{{ $item->is_employee }}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="actions">
                                                <form action="{{ route('users.destroy', $item->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Del</button>
                                                </form>
                                                
                                                <a class="btn btn-sm btn-info" href="{{ route('users.edit', $item->id)}}" class="btn btn-primary">Edit</a>
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