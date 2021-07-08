@extends('dashboard.layouts.master')

@section('title', 'Sponsors')

@section('sponsors', 'active')

@section('breadcrumbs', Breadcrumbs::render('sponsors.edit', $sponsor))

@section('content')
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <h5 class="card-title"> Edit Sponsor {{ $sponsor->name }}</h5>
                    <x-dashboard.forms.sponsors :url="route('dashboard.sponsors.update', $sponsor->id)" method="PUT" :sponsor="$sponsor"/>
                </div>
            </div>
        </div>
    </div>
@endsection