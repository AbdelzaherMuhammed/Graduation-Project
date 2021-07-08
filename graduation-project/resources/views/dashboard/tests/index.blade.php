@extends('dashboard.layouts.master')

@section('title', 'Tests')

@section('tests', 'active')

@section('breadcrumbs', Breadcrumbs::render('tests'))

@section('content')
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <a href="{{ route('dashboard.tests.create') }}" class="btn btn-primary crud-btn">Add Test</a>
                    <div class="table-scroll">
                        <table class="table table-striped table-bordered general-table" style="width:100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Date</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tests as $question)
                                <tr>
                                    <td>{{ $question->name }}</td>
                                    <td>{{ $question->created_at }}</td>
                                    <td>
                                        {!! Form::open([
                                            'url' => route('dashboard.tests.destroy', $question),
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