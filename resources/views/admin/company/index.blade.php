@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="full-right">
                <h2>Companies</h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Logo</th>
            <th scope="col">Website</th>
            <th scope="col" class="text-center">
                <a href="{{route('companies.create')}}" class="btn btn-success btn-sm">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </a>
            </th>
        </tr>
        </thead>

        <tbody>
        @foreach ($company as $key => $value)
            <tr>
                <td scope="row">{{ $key+1 }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td><img width="50" src="/storage/images/logo/{{ $value->logo }}" alt="img"></td>
                <td>{{ $value->website }}</td>
                <td class="text-center">
                    <a class="btn btn-info btn-sm" href="{{route('companies.show',$value->id)}}">
                        <i class="fa fa-puzzle-piece" aria-hidden="true"></i></a>
                    <a class="btn btn-primary btn-sm" href="{{route('companies.edit',$value->id)}}">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    <form method="POST" action="{{ route('companies.destroy',$value->id) }}" style="display:inline">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"
                                                                               aria-hidden="true"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $company->links() }}
@endsection
