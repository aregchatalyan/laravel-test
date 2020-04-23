@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Company</h2>
            </div>
            <div class="pull-right">
                <br/>
                <a class="btn btn-primary" href="{{ route('companies.index') }}"> <i class="fa fa-arrow-left"
                                                                                     aria-hidden="true"></i></a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card" style="width: 20rem;">
            <img src="/storage/images/logo/{{ $company->logo }}" class="card-img-top" alt="Company logo">
            <div class="card-body">
                <h5 class="card-title">Name: {{ $company->name}}</h5>
                <h5 class="card-title">Email: {{ $company->email}}</h5>
                <a href="https://www.{{ $company->website }}" class="btn btn-primary" target="_blank">Website</a>
            </div>
        </div>
    </div>
@endsection
