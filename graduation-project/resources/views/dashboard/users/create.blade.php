@extends('dashboard.layouts.master')

@section('title', 'Users')

@section('users', 'active')

@section('breadcrumbs', Breadcrumbs::render('users.create'))

@section('content')
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <h5 class="card-title">Add User</h5>
                    <x-dashboard.forms.users :url="route('dashboard.users.store')" method="POST"/>
                </div>
            </div>
        </div>
    </div>
@endsection