@extends('dashboard.layouts.master')

@section('title', 'Tools')

@section('tools', 'active')

@section('breadcrumbs', Breadcrumbs::render('tools'))

@section('content')
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <a href="{{ route('dashboard.tools.create') }}" class="btn btn-primary crud-btn">Add Tool</a>
                    <div class="table-scroll">
                        <table class="table table-striped table-bordered general-table" style="width:100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Photo</th>
                                <th>Date</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tools as $tool)
                                <tr>
                                    <td>{{ $tool->name }}</td>
                                    <td>
                                        <div style="border-radius: 50%; width: 80px; height: 80px;">
                                            <img src="{{file_exists($tool->photo) ? asset($tool->photo) : 'https://via.placeholder.com/100?text='.$tool-> name}}" class="img-fluid">
                                        </div>
                                    </td>
                                    <td>{{ $tool->created_at }}</td>
                                    <td>
                                        <a href="{{ route('dashboard.tools.edit' , $tool) }}" class="btn btn-outline-success"> <i class="fas fa-edit" title="edit"></i> </a>
                                        {!! Form::open([
                                            'url' => route('dashboard.tools.destroy', $tool),
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