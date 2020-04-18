@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Company</h2>
            </div>
            <div class="pull-right">
                <br/>
                <a class="btn btn-primary" href="{{ route('companies.index') }}"> <i class="fa fa-arrow-left" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name: </strong>
                {{ $company->name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email: </strong>
                {{ $company->email}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Logo: </strong>
                <img width="150" src="/storage/images/logo/{{ $company->logo }}" alt="img">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Website: </strong>
                {{ $company->website}}
            </div>
        </div>
    </div>
@endsection
