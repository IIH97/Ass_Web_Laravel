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
            <h2 class="text-center">Patients Page</h2>
        </div>

    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Check your fields</strong> 
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('patients.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name</strong>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Date of Birth</strong>
                    <input type="text" name="dob" class="form-control">
                </div>
                <div c'lass="form-group">
                    <strong>Gender</strong>
                    <input type="text" name="gender" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Phone Number</strong>
                    <input type="text" name="phone" class="form-control">
                </div>
                <div class="form-group">
                    <strong>Email</strong>
                    <input type="email" name="email"  class="form-control">
                </div>
                <div class="form-group">
                    <strong>Required Medical tests</strong>
                    <input type="text" name="medtest"  class="form-control">
                </div>
                <div class="form-group">
                    <strong>Results</strong>
                    <input type="text" name="res"  class="form-control" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary"><strong>Save</strong></button>
            </div>
        </div>

    </form>
@endsection