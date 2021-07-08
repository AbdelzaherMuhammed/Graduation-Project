@props(['url', 'method', 'article'=>null])
{!! Form::model($article, [
    'url' => $url,
    'method' => $method,
    'id' => 'form'
]) !!}
<div class="form-box form-group">
    <div class="row">
        <div class="form-group col-12">
            <label class="form-label" for="name"> Name </label>
            {!! Form::text('name', null, [
                //'placeholder' => 'الاسم',
                'id' => 'name',
                'class' => 'form-control',
                'required'
            ]) !!}
            @error('name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group col-12">
            <label class="form-label" for="description">Content </label>
            {!! Form::textarea('description', null, [
                //'placeholder' => 'address',
                'id' => 'description',
                'class' => 'form-control',
                'required'
            ]) !!}
            @error('description')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>

</div>
<button type="submit" class="btn btn-primary crud-btn"> Save </button>
{!! Form::close() !!}
