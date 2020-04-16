@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {{ Form::model($company,['route'=>['companies.update',$company->id],'method'=>'PATCH']) }}
            @include('admin.form_master')
            {{ Form::close() }}
        </div>
    </div>
@endsection
