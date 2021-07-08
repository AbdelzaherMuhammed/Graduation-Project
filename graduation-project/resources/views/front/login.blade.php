@extends('front.layouts.master')

@section('title', 'Login Page')

@section('content')
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <div class="container log">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('front/imgs/home.png') }}" class="img-fluid h-100 " alt="">
            </div>
            <div class="col-lg-6">
                <p class="lead pt-2">Early diagnosis system of <br>Alzheimer's disease</p>
                <div class="pt-5 text-center ">
                    {!! Form::open([
                        'url' => route('patient.login')
                    ]) !!}
                    <h1>Sign In</h1>
                    <hr>
                    <label class="text-muted">Username:</label>
                    {!! Form::text('username', null, [
                        'class' => 'form-control w-50 p-1',
                        'id' => 'username'
                    ]) !!}
                    @error('username')
                    <small class="text-danger">{{ $message }}</small><br>
                    @enderror
                    <label class="text-muted">Password:</label>
                    {!! Form::password('password', [
                        'class' => 'form-control w-50 p-1',
                        'id' => 'username'
                    ]) !!}
                    @error('password')
                    <small class="text-danger">{{ $message }}</small><br>
                    @enderror
                    <a href="#" class="text-muted "> Forget Password?  </a><br>
                    <button type="submit" class="btn  mt-3">Login</button>
                    <p class="text-muted pt-2">You don't Have An Account? <a href="{{ route('patient.register') }}"> Sign Up </a></p>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>


@endsection