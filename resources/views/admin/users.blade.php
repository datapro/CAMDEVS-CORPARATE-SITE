@extends('layouts.admin')
@section('content')
@include('layouts.sidebar')

<h1 style="text-align: center">Account users</h1>

    <div style="flex:1" class="table-responsive">
        <table class="table table-framed">
            <thead>
            <tr>
            <th>#</th>
            <th>Name</th>
            <th>Username</th>
            <th>Password</th>
            <th>Day Created</th>           
            <th>User Role</th>           
            </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
            <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>{{ $user->created_at }}</td>
            <td>{{ $user->role }}</td>
            <td>
             <!-- Delete Button -->
             <form action="{{ url('/users', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
            </tr>
            @endforeach
            </tbody>
            </table>
    </div>

@endsection