@extends('front.layouts.master')

@section('title', 'Register Page')

@section('content')
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">

    <div class="container sec">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('front/imgs/sign.png') }}" class="img-fluid h-100 wow fadeInLeft" alt="">
            </div>
            <div class="col-lg-6">
                <h2>Sign Up</h2>


                <div class="tab">
                    <button class="tablinks lead text-muted" onclick="showcontent(event, 'PersonalInfo')">Personal
                        Info</button>
                    <button class="tablinks lead text-muted" onclick="showcontent(event, 'AccountDet')">Account
                        Deatils</button>
                </div>

                <!-- Personal Info  -->
                <div id="PersonalInfo" class="tabcontent">

                    {!! Form::open([
                        'url' => route('patient.register')
                    ]) !!}
                    <div class="form-group  prs">
                        <label class="text-muted">Full Name:</label>
                        {!! Form::text('full_name', null, [
                            'class' => 'form-control w-75',
                            'placeholder' => 'Full Name:'
                        ]) !!}
                        @error('full_name')
                        <small class="text-danger">{{ $message }}</small> <br>
                        @enderror

                        <label class="text-muted">Username:</label>
                        {!! Form::text('username', null, [
                            'class' => 'form-control w-75',
                            'placeholder' => 'Username:'
                        ]) !!}
                        @error('username')
                        <small class="text-danger">{{ $message }}</small> <br>
                        @enderror

                        <label class="text-muted">Gender:</label>
                        {!! Form::select('gender', gender(), null, [
                            'placeholder' => 'I\'m a',
                            'id' => 'exampleFormControlSelect1',
                            'class' => 'form-control w-75',
                            'required'
                        ]) !!}
                        @error('gender')
                        <small class="text-danger">{{ $message }}</small> <br>
                        @enderror

                        <label class="text-muted">Date Of Birth:</label>
                        <div class="form-inline dat">

                            {!! Form::date('date_of_birth', null, [
                                'class' => 'form-control mt-2 w-75'
                            ]) !!}
                            @error('date_of_birth')
                            <small class="text-danger">{{ $message }}</small> <br>
                            @enderror

                        </div>

                        <button class="btn mt-3 w-75"> Continue </button>
                        <p class="text-muted pt-2 ml-5">Already Have An Account <a href="{{ route('patient.login') }}"> Sign In </a></p>


                    </div>
                </div>
                <!-- Account Details  -->
                <div id="AccountDet" class="tabcontent">
                    <div class="form-group acc">
                        <label class="text-muted"> Email : </label>
                        {!! Form::email('email', null, [
                            'class' => 'form-control',
                        ]) !!}
                        @error('email')
                        <small class="text-danger">{{ $message }}</small> <br>
                        @enderror

                        <label class="text-muted"> Create New password: </label>
                        {!! Form::password('password', [
                            'class' => 'form-control',
                        ]) !!}
                        @error('password')
                        <small class="text-danger">{{ $message }}</small> <br>
                        @enderror

                        <label class="text-muted"> password Confirmation: </label>
                        {!! Form::password('password_confirmation', [
                            'class' => 'form-control',
                        ]) !!}
                        @error('password_confirmation')
                        <small class="text-danger">{{ $message }}</small> <br>
                        @enderror

                        <label class="text-muted"> Phone Number (Optional) </label>
                        {!! Form::number('phone', null, [
                            'class' => 'form-control',
                        ]) !!}
                        @error('phone')
                        <small class="text-danger">{{ $message }}</small> <br>
                        @enderror

                        <label class="text-muted"> Is there a family health history? </label>
                        {!! Form::text('history', null, [
                            'class' => 'form-control',
                        ]) !!}
                        @error('history')
                        <small class="text-danger">{{ $message }}</small> <br>
                        @enderror

                        <button class="btn " type="submit"> SUBMIT </button>
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function showcontent(evt, pers) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(pers).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
@endpush

