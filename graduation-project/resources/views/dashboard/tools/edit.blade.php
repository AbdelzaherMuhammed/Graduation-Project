@extends('dashboard.layouts.master')

@section('title', 'Tools')

@section('tools', 'active')

@section('breadcrumbs', Breadcrumbs::render('tools.edit', $tool))

@section('content')
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <h5 class="card-title"> Edit Tool {{ $tool->name }}</h5>
                    <x-dashboard.forms.tools :url="route('dashboard.tools.update', $tool->id)" method="PUT" :tool="$tool"/>
                </div>
            </div>
        </div>
    </div>
@endsection