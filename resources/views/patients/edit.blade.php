{{--Author(s) name: onlincode website
, Date: 27/10/2021
, Title of program/source code: Laravel 9 CRUD Example | Laravel 9 CRUD Beginners Tutorial
, Code version 1
, and Availability: http://onlinecode.org/laravel-9-crud-example-laravel-9-beginners-tutorial/  
--}}
@extends('patients.layout')
@section('content')

    <div class="row">
        <div class="col-lg-10">
            <h2 class="text-center">Update Patient</h2>
        </div>
    </div>
    <form action="{{ route('patients.update',$patient->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-10 col-sm-10 col-md-10">
                <div class="form-group">
                    <strong>Name</strong>
                    <input type="text" name="name" value="{{ $patient->name }}" class="form-control">
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10">
                <div class="form-group">
                    <strong>Date of Birth</strong>
                    <textarea class="form-control" name="dob">{{ $patient->dob }}</textarea>
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10">
                <div class="form-group">
                    <strong>Gender</strong>
                    <textarea class="form-control" name="gender">{{ $patient->gender }}</textarea>
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10">
                <div class="form-group">
                    <strong>Phone Number</strong>
                    <textarea class="form-control"  name="phone">{{ $patient->phone }}</textarea>
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10">
                <div class="form-group">
                    <strong>Email</strong>
                    <textarea class="form-control" name="email" >{{ $patient->email }}</textarea>
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10">
                <div class="form-group">
                    <strong>Requested Medical tests</strong>
                    <textarea class="form-control" name="medtest">{{ $patient->medtest }}</textarea>
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10">
                <div class="form-group">
                    <strong>Results</strong>
                    <textarea class="form-control" name="res" >{{ $patient->res }}</textarea>
                </div>
            </div>
            <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('patients.index') }}"> Back</a>

            <button type="submit" class="btn btn-primary">Save</button>
            </div>

        </div>
    </form>
@endsection