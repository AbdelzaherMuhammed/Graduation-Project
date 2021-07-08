@props(['url', 'method', 'tool'=>null])
{!! Form::model($tool, [
    'url' => $url,
    'method' => $method,
    'id' => 'form',
    'files' => true
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

        <div class="form-group col-md-12">
            <label for="category">Photo</label>
            <div class="custom-file">
                <label class="custom-file-label devo-label parag text-muted" for="photo">Choose Photo</label>
                <input type="file" id="photo" class="devo-input custom-file-input form-control-user @error('photo') is-invalid @enderror" placeholder="اختر الصوره" name="photo">
                @error('photo')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            @if ($tool)
                <h6>Current Photo</h6>

                <div style="border-radius: 50%; width: 80px; height: 80px;">
                    <img src="{{asset($tool->photo)}}" class="img-fluid">
                </div>
            @endif
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary crud-btn"> Save </button>
{!! Form::close() !!}
