@extends('dashboard.layouts.master')

@section('title', 'Questions')

@section('questions', 'active')

@section('breadcrumbs', Breadcrumbs::render('questions'))

@section('content')
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <a href="{{ route('dashboard.questions.create') }}" class="btn btn-primary crud-btn">Add Question</a>
                    <div class="table-scroll">
                        <table class="table table-striped table-bordered general-table" style="width:100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Date</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($questions as $question)
                                <tr>
                                    <td>{{ $question->name }}</td>
                                    <td>{{ $question->type }}</td>
                                    <td>{{ $question->created_at }}</td>
                                    <td>
                                        <a href="{{ route('dashboard.questions.edit' , $question) }}" class="btn btn-outline-success"> <i class="fas fa-edit" title="edit"></i> </a>
                                        {!! Form::open([
                                            'url' => route('dashboard.questions.destroy', $question),
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