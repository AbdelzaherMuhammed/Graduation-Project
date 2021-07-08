@section('title', ' Add New Question Bank ')

@section('questions', 'active')

@extends('dashboard.layouts.master')

@section( 'breadcrumbs' , Breadcrumbs::render('questions.create') )

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
                                    <h2 class="main-header heading"> Add New Question </h2>
                                    <form action="{{route('dashboard.questions.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
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

                                            @for($choice = 1; $choice <= $choices; $choice++)
                                                <div class="form-group row">
                                                    {{--                                                    <div class="col-1" style="margin-top: 45px;">--}}
                                                    {{--                                                    </div>--}}
                                                    <div class="col-12">
                                                        <label class="devo-label parag label-right" for="choice1"> Choice
                                                            Number {{ $choice }} </label>
                                                        {!! Form::text('choices[choice' . $choice . ']', null, [
                                                            //'placeholder' => 'الاسم',
                                                            'id' => 'choices[choice' . $choice . ']',
                                                            'class' => 'form-control',
                                                        ]) !!}
                                                        @error('choices.choice'.$choice)
                                                        <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            @endfor

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
                                    </form>
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
