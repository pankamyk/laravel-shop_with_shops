@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin</div>
 
                <div class="card-body">
                    <div class="container flex-center">
                        <li class="nav-link">
                            <a class="nav-link" href="{{ route('users.index') }}">Manage Users</a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection