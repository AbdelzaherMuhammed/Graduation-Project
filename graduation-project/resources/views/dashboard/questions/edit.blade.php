@section('title', 'Edit Question Bank')

@section('questions', 'active')

@extends('dashboard.layouts.master')

@section( 'breadcrumbs' , Breadcrumbs::render('questions.edit', $question) )

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="devo-content">
        <div class="animate-box">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                    <!-- start table-section -->
                        <div class="add-section pd-30">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="main-header heading"> Edit Question </h2>
                                    {!! Form::model($question, [
                                        'url' => route('dashboard.questions.update', $question),
                                        'method' => 'put'
                                    ]) !!}
                                        <div class="form-box devo-shadow devo-radius">

                                            <div class="form-group">
                                                <label class="devo-label parag" for="question-bank-name"> Question Type </label>
                                                <div class="select-box">
                                                    {!! Form::select('type', questionType(), null, [
                                                        'id' => 'type',
                                                        'class' => 'form-control select2',
                                                        'required'
                                                    ]) !!}
                                                    <small class="text-danger">{{ $errors->first('type') }}</small>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="devo-label parag" for="question-bank-name"> Question Name </label>
                                                {!! Form::text('name', null, [
                                                    //'placeholder' => 'الاسم',
                                                    'id' => 'name',
                                                    'class' => 'form-control',
                                                    'required'
                                                ]) !!}
                                                <small class="text-danger">{{ $errors->first('name') }}</small>
                                            </div>

                                            @if($question->type == 'mcq')
                                                <div class="form-group row">
                                                    @foreach($question->choices as $choice)
                                                        <div class="col-12">
                                                            <label class="devo-label parag label-right" for="choice1"> Choice
                                                                Number {{ $loop->iteration }} </label>
                                                            <input type="text" placeholder="Choice Number {{ $loop->iteration }}"
                                                                   id="choices{{ $loop->iteration }}" name="choices[choice{{ $loop->iteration }}]"
                                                                   class="form-control" value="{{ $choice }} ">
                                                            @error('choice.choice'.$loop->iteration )
                                                            <small class="text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif

                                            <div class="row">
                                                <div class="form-group col-6">
                                                    <label class="devo-label parag" for="mark_when_correct"> Mark When Correct Answer </label>
                                                    {!! Form::text('mark_when_correct', null, [
                                                        //'placeholder' => 'الاسم',
                                                        'id' => 'mark_when_correct',
                                                        'class' => 'form-control',
                                                        'required'
                                                    ]) !!}
                                                    @error('mark_when_correct')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-6">
                                                    <label class="devo-label parag" for="mark_when_false"> Mark When False Answer </label>
                                                    {!! Form::text('mark_when_false', null, [
                                                        //'placeholder' => 'الاسم',
                                                        'id' => 'mark_when_false',
                                                        'class' => 'form-control',
                                                        'required'
                                                    ]) !!}
                                                    @error('mark_when_false')
                                                    <small class="text-danger">{{ $message }}</small>
                                                    @enderror
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
