@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="full-right">
                <h2>Employees</h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th with="80px">No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th width="180" class="text-center">
                <a href="{{route('employees.create')}}" class="btn btn-success btn-sm">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </a>
            </th>
        </tr>

        @foreach ($employee as $key => $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{ $value->first_name }}</td>
                <td>{{ $value->last_name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->phone }}</td>
                <td class="text-center">
                    <a class="btn btn-info btn-sm" href="{{route('employees.show',$value->id)}}">
                        <i class="fa fa-puzzle-piece" aria-hidden="true"></i></a>
                    <a class="btn btn-primary btn-sm" href="{{route('employees.edit',$value->id)}}">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    {!! Form::open(['method' => 'DELETE','route' => ['employees.destroy', $value->id],'style'=>'display:inline']) !!}
                    <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
@endsection
