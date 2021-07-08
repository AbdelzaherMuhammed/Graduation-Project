@extends('dashboard.layouts.master')

@section('title', 'Tools')

@section('tools', 'active')

@section('breadcrumbs', Breadcrumbs::render('tools.create'))

@section('content')
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <h5 class="card-title">Add Tool</h5>
                    <x-dashboard.forms.tools :url="route('dashboard.tools.store')" method="POST"/>
                </div>
            </div>
        </div>
    </div>
@endsection