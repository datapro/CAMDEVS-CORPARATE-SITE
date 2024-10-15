@extends('layouts.admin')
@section('content')
@include('layouts.sidebar')

<h1 style="text-align: center">Skill Acquisition  Applicants</h1>
<div style="display: flex; justify-content:space-evenly">
    <div>
        
    </div>
    
    <div>
        <p class="btn btn-danger">Insert <strong>CODE NUMBER</strong> to search for Applicant</p>
        <form action="{{url('/skill')}}" method="get" >
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
            <th class="sorting_asc" >Tertiary skillool</th>
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
                @foreach($skills as $skill)
            <tr>
                <th scope="row">{{$skill->id}}</th>
                <th scope="row">{{$skill->code}}</th>
                <td class="even">{{$skill->fname}}</td>
                <td class="even">{{$skill->sname}}</td>
                <td class="even">{{$skill->age}}</td>
                <td class="even">{{$skill->address}}</td>
                <td class="even">{{$skill->university}}</td>
                <td class="even">{{$skill->nin}}</td>
                <td class="even">{{$skill->skillool}}</td>
                <td class="even">{{$skill->membership}}</td>
                <td class="even">{{$skill->phone}}</td>
                <td class="even">{{$skill->email}}</td>
                <td class="even">{{$skill->state}}</td>
                <td class="even">{{$skill->stater}}</td>
                <td class="even">{{$skill->lga}}</td>
                <td class="even">{{$skill->lgar}}</td>
                <td class="even">
                    <a href="{{ route('edit.skill', $skill->id) }}" class="btn btn-success">Edit</a>
                </td>
                <td class="even">
                        <!-- Delete Button -->
                <form action="{{ url('/skill', $skill->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this Member?');">
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