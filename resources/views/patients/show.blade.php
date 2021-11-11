@extends('patients.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Patient Data</h2>
        </div>
    </div>
    <div class="row">
        <table>
    <tr>
    <th> Name </th> <th>:</th>
    <td>{{ $patient->name }}</td>  
    </tr>

    <tr>
    <td> <strong> Date of Birth </strong> </td> <td>:</td>
    <td>{{ $patient->dob }}</td>  
    </tr>

    <tr>
    <td> <strong> Gender </strong> </td> <td>:</td>
    <td>{{ $patient->gender }}</td>  
    </tr>

    <tr>
    <td> <strong> Phone Number </strong> </td> <td>:</td>
    <td>{{ $patient->phone }}</td>  
    </tr>

    <tr>
    <td> <strong> Email </strong> </td> <td>:</td>
    <td>{{ $patient->email }}</td>  
    </tr>

    <tr>
    <td> <strong> Requested Medical Tests </strong> </td> <td>:</td>
    <td>{{ $patient->medtest }}</td>  
    </tr>

    <tr>
    <td> <strong> Results </strong> </td> <td>:</td>
    <td>{{ $patient->res }}</td>  
    </tr>
</table>
              
            <div class="col-lg-12 text-center" style="margin-top:12px;margin-bottom: 12px;">
            <a class="btn btn-primary" href="{{ route('patients.index') }}"> Back to All patients</a>
        </div>
    </div>
@endsection