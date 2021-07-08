@props(['url', 'method', 'user'=>null])
{!! Form::model($user, [
    'url' => $url,
    'method' => $method,
    'id' => 'form'
]) !!}
<div class="form-box form-group">
    <div class="row">
        <div class="form-group col-6">
            <label class="form-label" for="full_name"> Full Name </label>
            {!! Form::text('full_name', null, [
                //'placeholder' => 'الاسم',
                'id' => 'name',
                'class' => 'form-control',
                'required'
            ]) !!}
            @error('full_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group col-6">
            <label class="form-label" for="username">Username </label>
            {!! Form::text('username', null, [
                //'placeholder' => 'address',
                'id' => 'username',
                'class' => 'form-control',
                'required'
            ]) !!}
            @error('username')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="form-group col-6">
            <label class="form-label" for="phone">Phone </label>
            {!! Form::number('phone', null, [
                //'placeholder' => 'رقم الهاتف',
                'id' => 'phone',
                'class' => 'form-control',
                'required'
            ]) !!}
            @error('phone')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-6">
            <label class="form-label" for="email">Email </label>
            {!! Form::email('email', null, [
                //'placeholder' => 'البريد الالكتروني',
                'id' => 'email',
                'class' => 'form-control',
                'required'
            ]) !!}
            @error('email')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="form-group col-6">
            <label class="form-label" for="gender">Gender</label>
            {!! Form::select('gender', gender(), $user ? $user->gender : null, [
                //'placeholder' => 'العنوان',
                'id' => 'gender',
                'class' => 'form-control select2',
                'required'
            ]) !!}
            @error('gender')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-6">
            <label class="form-label" for="type">Type Of User</label>
            {!! Form::select('type', userType(), $user ? $user->type : null, [
                //'placeholder' => 'اختر نوع',
                'id' => 'type',
                'class' => 'form-control select2',
                'required'
            ]) !!}
            @error('type')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="form-group col-6">
            <label class="form-label" for="password">Password</label>
            {!! Form::password('password', [
                //'placeholder' => 'كلمة المرور',
                'id' => 'password',
                'class' => 'form-control',
                'autocomplete' => 'new-password',
                $user ? '' : 'required'
            ]) !!}
            @error('password')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group col-6">
            <label class="form-label" for="password_confirmation">Password Confirmation</label>
            {!! Form::password('password_confirmation', [
                //'placeholder' => 'تاكيد كلمة المرور',
                'id' => 'password_confirmation',
                'class' => 'form-control',
                $user ? '' : 'required'
            ]) !!}
            @error('password_confirmation')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary crud-btn"> Save </button>
{!! Form::close() !!}
