@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {{ Form::open(['route'=>'companies.store', 'method'=>'POST', 'enctype' => 'multipart/form-data']) }}
            @include('admin.form_master')
            {{ form::close() }}
        </div>
    </div>
@endsection
