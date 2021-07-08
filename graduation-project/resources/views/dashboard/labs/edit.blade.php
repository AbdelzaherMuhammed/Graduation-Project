@extends('dashboard.layouts.master')

@section('title', 'Labs')

@section('labs', 'active')

@section('breadcrumbs', Breadcrumbs::render('labs.edit', $lab))

@section('content')
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <h5 class="card-title"> Edit Lab {{ $lab->name }}</h5>
                    <x-dashboard.forms.labs :url="route('dashboard.labs.update', $lab->id)" method="PUT" :lab="$lab"/>
                </div>
            </div>
        </div>
    </div>
@endsection