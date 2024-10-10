@extends('layouts.admin')
@section('content')
@include('layouts.sidebar')

<h1 style="text-align: center">Registered for Smale Scale Business</h1>
<div style="flex:1" class="table-responsive">
       
    <table class="table table-striped table-bordered nowrap dataTable " >
        <thead>
        <tr>
        <th class="sorting_asc" >#</th>
        <th class="sorting_asc" >First Name</th>
        <th class="sorting_asc" >Last Name</th>
        <th class="sorting_asc" >Age</th>
        <th class="sorting_asc" >Tertiary School</th>
        <th class="sorting_asc" >NIN</th>
        <th class="sorting_asc" >Membership</th>
        <th class="sorting_asc" >Address</th>
        <th class="sorting_asc" >Email</th>
        <th class="sorting_asc" >LGA</th>
        <th class="sorting_asc" >State of Residence</th>
        <th class="sorting_asc" >Local Government of Residence</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td class="even">First Name</td>
            <td class="even">Last Name</td>
            <td class="even">Age</td>
            <td class="even">Tertiary School</td>
            <td class="even">NIN</td>
            <td class="even">Membership</td>
            <td class="even">Address</td>
            <td class="even">Email</td>
            <td class="even">LGA</td>
            <td class="even">State of Residence</td>
            <td class="even">Local Government of Residence</td>
            <td class="even">
                <a href="" class="btn btn-success">Edit</a>
            </td>
            <td class="even">
                <!-- Delete Button -->
                <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                   <button type="submit" class="btn btn-danger">Delete</button>
               </form>
               </td>
        </tr>
        </tbody>
        </table>
</div>
@endsection