@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Company</h2>
            </div>
            <div class="pull-right">
                <br/>
                <a class="btn btn-primary" href="{{ route('employees.index') }}"> <i class="fa fa-arrow-left"
                                                                                     aria-hidden="true"></i></a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card" style="width: 20rem;">
            <div class="card-body">
                <h5 class="card-title">Name: {{ $employee->first_name }} {{ $employee->last_name}}</h5>
                <h5 class="card-title">Email: {{ $employee->email}}</h5>
                <h5 class="card-title">Phone: {{ $employee->phone }}</h5>
            </div>
        </div>
    </div>
@endsection
