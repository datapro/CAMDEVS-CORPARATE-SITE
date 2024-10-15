@extends('layouts.admin')
@section('content')
@include('layouts.sidebar')

<h1 style="text-align: center">Scholarship Applicants</h1>
<div style="display: flex; justify-content:space-evenly">
    <div></div>
    <div>
        <p class="btn btn-danger">Insert <strong>CODE NUMBER</strong> to search for Applicant</p>
     <form action="{{url('/scholarship')}}" method="get" >
        <input type="text" name="query" placeholder="Search..." required>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
</div>

    <div style="flex:1" class="table-responsive">
        <div style="text-align: center">@include('inc.messages')</div>
       
        <table class="table table-striped table-bordered nowrap dataTable " >
            <thead>
            <tr>
            <th class="sorting_asc" >#</th>
            <th class="sorting_asc" >Code</th>
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
                @foreach($schs as $sch)
            <tr>
                <th scope="row">{{$sch->id}}</th>
                <th scope="row">{{$sch->code}}</th>
                <td class="even">{{$sch->fname}}</td>
                <td class="even">{{$sch->sname}}</td>
                <td class="even">{{$sch->age}}</td>
                <td class="even">{{$sch->address}}</td>
                <td class="even">{{$sch->university}}</td>
                <td class="even">{{$sch->nin}}</td>
                <td class="even">{{$sch->school}}</td>
                <td class="even">{{$sch->membership}}</td>
                <td class="even">{{$sch->phone}}</td>
                <td class="even">{{$sch->email}}</td>
                <td class="even">{{$sch->state}}</td>
                <td class="even">{{$sch->stater}}</td>
                <td class="even">{{$sch->lga}}</td>
                <td class="even">{{$sch->lgar}}</td>
                <td class="even">
                    <a href="{{ route('edit.scholarship', $sch->id) }}" class="btn btn-success">Edit</a>
                </td>
                <td class="even">
                        <!-- Delete Button -->
                <form action="{{ url('/scholarship', $sch->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this Member?');">
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