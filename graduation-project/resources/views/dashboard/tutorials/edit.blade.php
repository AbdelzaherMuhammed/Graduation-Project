@extends('dashboard.layouts.master')

@section('title', 'Tutorials')

@section('tutorials', 'active')

@section('breadcrumbs', Breadcrumbs::render('tutorials.edit', $tutorial))

@section('content')
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <h5 class="card-title"> Edit Tutorial </h5>
                    <x-dashboard.forms.tutorials :url="route('dashboard.tutorials.update', $tutorial->id)" method="PUT" :tutorial="$tutorial"/>
                </div>
            </div>
        </div>
    </div>
@endsection