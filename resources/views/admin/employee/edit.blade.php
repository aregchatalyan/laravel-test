@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {{ Form::model($employee,['route'=>['employees.update',$employee->id],'method'=>'PATCH']) }}
            @include('admin.employee.form_master')
            {{ Form::close() }}
        </div>
    </div>
@endsection
