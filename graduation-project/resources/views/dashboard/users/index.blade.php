@extends('dashboard.layouts.master')

@section('title', 'Users')

@section('users', 'active')

@section('breadcrumbs', Breadcrumbs::render('users'))

@section('content')
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <a href="{{ route('dashboard.users.create') }}" class="btn btn-primary crud-btn">Add User</a>
                    <div class="table-scroll">
                        <table class="table table-striped table-bordered general-table" style="width:100%">
                            <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Username</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->full_name }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>
                                        <a href="{{ route('dashboard.users.edit' , $user) }}" class="btn btn-outline-success"> <i class="fas fa-edit" title="edit"></i> </a>
                                        {!! Form::open([
                                            'url' => route('dashboard.users.destroy', $user),
                                            'method' => 'delete',
                                            'style' => 'display:inline-block',
                                        ]) !!}
                                            <button type="submit" class="btn btn-outline-danger delete">
                                                <i class="fas fa-trash-alt" title="delete"></i>
                                            </button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection