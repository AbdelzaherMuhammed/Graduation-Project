@extends('dashboard.layouts.master')

@section('title', 'Users')

@section('users', 'active')

@section('breadcrumbs', Breadcrumbs::render('users.edit', $user))

@section('content')
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <h5 class="card-title"> Edit User {{ $user->full_name }}</h5>
                    <x-dashboard.forms.users :url="route('dashboard.users.update', $user->id)" method="PUT" :user="$user"/>
                </div>
            </div>
        </div>
    </div>
@endsection