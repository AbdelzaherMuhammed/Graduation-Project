@extends('dashboard.layouts.master')

@section('title', 'Tutorials')

@section('tutorials', 'active')

@section('breadcrumbs', Breadcrumbs::render('tutorials.create'))

@section('content')
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <h5 class="card-title">Add Tutorial</h5>
                    <x-dashboard.forms.tutorials :url="route('dashboard.tutorials.store')" method="POST"/>
                </div>
            </div>
        </div>
    </div>
@endsection