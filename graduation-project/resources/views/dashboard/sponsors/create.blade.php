@extends('dashboard.layouts.master')

@section('title', 'Sponsors')

@section('sponsors', 'active')

@section('breadcrumbs', Breadcrumbs::render('sponsors.create'))

@section('content')
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <h5 class="card-title">Add Sponsor</h5>
                    <x-dashboard.forms.sponsors :url="route('dashboard.sponsors.store')" method="POST"/>
                </div>
            </div>
        </div>
    </div>
@endsection