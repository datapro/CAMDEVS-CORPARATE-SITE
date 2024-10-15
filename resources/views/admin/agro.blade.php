@extends('layouts.admin')
@section('content')
@include('layouts.sidebar')

<h1 style="text-align: center">Applicant for Agro ALLIED</h1>
    <div style="display: flex; justify-content:space-evenly">
        <div>
            
        </div>
        
        <div>
            <p class="btn btn-danger">Insert <strong>CODE NUMBER</strong> to search for Applicant</p>
            <form action="{{url('/agro')}}" method="get" >
            <input type="text" name="query" placeholder="Search..." required>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    </div>

<div style="flex:1" class="table-responsive">
        <div style="text-align: center;">@include('inc.messages')</div> 
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
                {{-- search --}}
            @if($agros->isEmpty())
                <p>No results found.</p>
            @else
            {{-- loop --}}
                @foreach($agros as $agro)
            <tr>
                <th scope="row">{{$agro->id}}</th>
                <th scope="row">{{$agro->code}}</th>
                <td class="even">{{$agro->fname}}</td>
                <td class="even">{{$agro->sname}}</td>
                <td class="even">{{$agro->age}}</td>
                <td class="even">{{$agro->address}}</td>
                <td class="even">{{$agro->university}}</td>
                <td class="even">{{$agro->nin}}</td>
                <td class="even">{{$agro->school}}</td>
                <td class="even">{{$agro->membership}}</td>
                <td class="even">{{$agro->phone}}</td>
                <td class="even">{{$agro->email}}</td>
                <td class="even">{{$agro->state}}</td>
                <td class="even">{{$agro->stater}}</td>
                <td class="even">{{$agro->lga}}</td>
                <td class="even">{{$agro->lgar}}</td>
                <td class="even">
                    <a href="{{ route('edit.agrof', $agro->id) }}" class="btn btn-success">Edit</a>
                </td>
                <td class="even">
                        <!-- Delete Button -->
                <form action="{{ url('/agrof', $agro->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this Member?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                   </td>
            </tr>
            @endforeach
            @endif
            </tbody>
            </table>
    </div>
 
@endsection