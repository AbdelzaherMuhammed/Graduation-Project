@props(['url', 'method', 'tutorial'=>null])
{!! Form::model($tutorial, [
    'url' => $url,
    'method' => $method,
    'id' => 'form',
    'files' => true
]) !!}
<div class="form-box form-group">
    <div class="row">
        <div class="form-group col-md-12">
            <label for="category">Video</label>
            <div class="custom-file">
                <label class="custom-file-label devo-label parag text-muted" for="photo">Choose Video</label>
                <input type="file" id="video" class="devo-input custom-file-input form-control-user @error('video') is-invalid @enderror"
                       placeholder="اختر الصوره" name="video">
                @error('video')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            @if ($tutorial)
                <h6>Current Video</h6>

                <video width="320" height="240" controls>
                    <source src="{{file_exists($tutorial->video) ? asset($tutorial->video) : 'https://via.placeholder.com/100?text='.$tutorial-> name}}">
                </video>
            @endif
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
<button type="submit" class="btn btn-primary crud-btn"> Save</button>
{!! Form::close() !!}
