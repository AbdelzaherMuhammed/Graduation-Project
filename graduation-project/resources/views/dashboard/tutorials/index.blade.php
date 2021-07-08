@extends('dashboard.layouts.master')

@section('title', 'Tutorials')

@section('tutorials', 'active')

@section('breadcrumbs', Breadcrumbs::render('tutorials'))

@section('content')
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <a href="{{ route('dashboard.tutorials.create') }}" class="btn btn-primary crud-btn">Add Tutorial</a>
                    <div class="table-scroll">
                        <table class="table table-striped table-bordered general-table" style="width:100%">
                            <thead>
                            <tr>
                                <th>Video</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tutorials as $tutorial)
                                <tr>
                                    <td>
                                            <video width="320" height="240" controls>
                                                <source src="{{file_exists($tutorial->video) ? asset($tutorial->video) : 'https://via.placeholder.com/100?text='.$tutorial-> name}}">
                                            </video>
                                    </td>
                                    <td>{{ $tutorial->description }}</td>
                                    <td>{{ $tutorial->created_at }}</td>
                                    <td>
                                        <a href="{{ route('dashboard.tutorials.edit' , $tutorial) }}" class="btn btn-outline-success"> <i class="fas fa-edit" title="edit"></i> </a>
                                        {!! Form::open([
                                            'url' => route('dashboard.tutorials.destroy', $tutorial),
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