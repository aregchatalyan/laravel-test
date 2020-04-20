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
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fisrt Name: </strong>
                {{ $employee->first_name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last Name: </strong>
                {{ $employee->last_name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email: </strong>
                {{ $employee->email}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone: </strong>
                {{ $employee->phone }}
            </div>
        </div>
    </div>
@endsection
