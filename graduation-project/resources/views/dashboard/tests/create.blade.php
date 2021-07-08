@section('title', ' Add New Test ')

@section('tests', 'active')

@extends('dashboard.layouts.master')

@section( 'breadcrumbs' , Breadcrumbs::render('tests.create') )

@section('content')
    <div class="devo-content">

        <div class="animate-box">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <!-- start table-section -->
                        <div class="add-section pd-30">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="main-header heading"> Add Test </h2>
                                    {!! Form::open([
                                        'url' => route('dashboard.tests.store')
                                    ]) !!}
                                        @csrf
                                        <div class="form-box devo-shadow devo-radius">
                                            <div class="form-group">
                                                <label class="devo-label parag" for="question-bank-name"> Test Name </label>
                                                {!! Form::text('name', null, [
                                                    //'placeholder' => 'الاسم',
                                                    'id' => 'name',
                                                    'class' => 'form-control',
                                                    'required'
                                                ]) !!}
                                                <small class="text-danger">{{ $errors->first('name') }}</small>
                                            </div>
                                            <div class="form-group">
                                                <label class="devo-label parag" for="question-bank-name"> Questions </label>
                                                <div class="select-box">
                                                    {!! Form::select('questions[]', $questions->pluck('name', 'id')->toArray(), null, [
                                                        'id' => 'questions',
                                                        'class' => 'form-control select2',
                                                        'required multiple'
                                                    ]) !!}
                                                    <small class="text-danger">{{ $errors->first('questions') }}</small>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary crud-btn"> Save </button>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                        <!-- end table-section -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
