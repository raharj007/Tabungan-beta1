@extends('layouts.admin')

@section('content')

<div class="container">
    <h1>Users List</h1>
        <p class="lead">Here's a list of all your users. <a href="{{ url('/register') }}">Add a new one?</a></p>
        @foreach($user as $users)
        @if ( $users->status != 1 )
            <h3>{{ $users->name }}</h3>
            <p>{{ $users->email}}</p>
            <p>
                <a href="" class="btn btn-info">View User</a>
                <a href="{{ route('userAdmin.update', $users->id) }}" class="btn btn-primary">Tambah Saldo</a>
            </p>
            <hr>
        @endif
        @endforeach
    <hr>
</div>

@stop