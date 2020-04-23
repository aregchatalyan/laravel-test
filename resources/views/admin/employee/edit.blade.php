@extends('layouts.app')
@section('content')
    <div class="row">
            <form method="POST" action="{{ route('employees.update',$employee->id) }}" enctype="multipart/form-data">
                @csrf
                <input name="_method" type="hidden" value="PATCH">
                @include('admin.employee.form_master')
            </form>
        </div>
    </div>
@endsection
