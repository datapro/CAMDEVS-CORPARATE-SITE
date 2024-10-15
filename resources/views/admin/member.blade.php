@extends('layouts.admin')
@section('content')
@include('layouts.sidebar')

<h1 style="text-align: center">Registered Members</h1>
<div style="display: flex; justify-content:space-evenly">
    <div>
        
    </div>
    
    <div>
        <p class="btn btn-danger">Insert <strong>NIN NUMBER</strong> to search for Applicant</p>
        <form action="{{url('/member')}}" method="get" >
        <input type="text" name="query" placeholder="Search..." required>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
</div>

    <div style="flex:1" class="table-responsive">
       
        <table class="table table-striped table-bordered nowrap dataTable " >
            <thead>
            <tr>
            <th class="sorting_asc" >#</th>
            <th class="sorting_asc" >First Name</th>
            <th class="sorting_asc" >Last Name</th>
            <th class="sorting_asc" >Age</th>
            <th class="sorting_asc" >Address</th>
            <th class="sorting_asc" >Tertiary School</th>
            <th class="sorting_asc" >NIN</th>
            <th class="sorting_asc" >Education</th>
            <th class="sorting_asc" >Membership</th>
            <th class="sorting_asc" >Contact</th>
            <th class="sorting_asc" >Email</th>
            <th class="sorting_asc" >State of origin</th>
            <th class="sorting_asc" >State of Residence</th>
            <th class="sorting_asc" >Local Government of Residence</th>
            <th class="sorting_asc" >LGA of origin</th>
            </tr>
            </thead>
            <tbody>
                @foreach($joins as $join)
            <tr>
                <th scope="row">{{$join->id}}</th>
                <td class="even">{{$join->fname}}</td>
                <td class="even">{{$join->sname}}</td>
                <td class="even">{{$join->age}}</td>
                <td class="even">{{$join->address}}</td>
                <td class="even">{{$join->university}}</td>
                <td class="even">{{$join->nin}}</td>
                <td class="even">{{$join->school}}</td>
                <td class="even">{{$join->membership}}</td>
                <td class="even">{{$join->phone}}</td>
                <td class="even">{{$join->email}}</td>
                <td class="even">{{$join->state}}</td>
                <td class="even">{{$join->stater}}</td>
                <td class="even">{{$join->lga}}</td>
                <td class="even">{{$join->lgar}}</td>
                <td class="even">
                    <a href="{{ route('edit.member', $join->id) }}" class="btn btn-success">Edit</a>
                </td>
                <td class="even">
                        <!-- Delete Button -->
                <form action="{{ url('/member', $join->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this Member?');">
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