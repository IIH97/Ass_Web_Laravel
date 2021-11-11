{{--Author(s) name: onlincode website
, Date: 27/10/2021
, Title of program/source code: Laravel 9 CRUD Example | Laravel 9 CRUD Beginners Tutorial
, Code version 1
, and Availability: http://onlinecode.org/laravel-9-crud-example-laravel-9-beginners-tutorial/  
--}}

@extends('patients.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12">
        <p>&nbsp;</p> 
        <p>&nbsp;</p> 
        <p>&nbsp; </p>
            <h2 class="text-center"><strong>Patients Main Page</strong></h2>
        </div>
        <p>&nbsp;</p> 
        <p>&nbsp;</p> 
        <p>&nbsp; </p>
    </div>
    @if(sizeof($patients) > 0)
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date of Bith</th>
                <th>Gender</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Requested Medical tests</th>
                <th>Results</th>
            </tr>
            @foreach ($patients as $patient)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $patient->name }}</td>
                    <td>{{ $patient->dob }}</td>
                    <td>{{ $patient->gender }}</td>
                    <td>{{ $patient->phone }}</td>
                    <td>{{ $patient->email }}</td>
                    <td>{{ $patient->medtest }}</td>
                    <td>{{ $patient->res }}</td>
                 </tr>
                 <tr>
                    <td> 
                        <form action="{{ route('patients.destroy',$patient->id) }}" method="POST">
                            <a class="btn" href="{{ route('patients.show',$patient->id) }}">View</a>
                            <a class="btn" href="{{ route('patients.edit',$patient->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
       <center> <a class="btn btn-primary" href="/">Back To Home</a> </center>
    @endif
    {!! $patients->links() !!}

@endsection