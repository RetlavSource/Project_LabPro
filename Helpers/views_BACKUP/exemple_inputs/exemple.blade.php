
{{-- TEXT AREA --}}
<div class="form-group row">
    <label for="88888888888888888" class="col-md-3 col-form-label text-md-right">{{ __('88888888888888888') }}</label>
    
    <div class="col-md-8">
        <textarea id="88888888888888888" class="form-control{{ $errors->has('88888888888888888') ? ' is-invalid' : '' }}" name="88888888888888888" rows="6" required>{{ old('88888888888888888') }}</textarea>

        @if ($errors->has('88888888888888888'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('88888888888888888') }}</strong>
            </span>
        @endif
    </div>
</div>

{{-- TEXT --}}
<div class="form-group row">
    <label for="88888888888888888" class="col-md-3 col-form-label text-md-right">{{ __('88888888888888888') }}</label>

    <div class="col-md-8">
        <input id="88888888888888888" type="text" class="form-control{{ $errors->has('88888888888888888') ? ' is-invalid' : '' }}" name="88888888888888888" value="{{ old('88888888888888888') }}" required>

        @if ($errors->has('88888888888888888'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('88888888888888888') }}</strong>
            </span>
        @endif
    </div>
</div>

{{-- NUMBER --}}
<div class="form-group row">
    <label for="88888888888888888" class="col-md-3 col-form-label text-md-right">{{ __('88888888888888888') }}</label>

    <div class="col-md-8">
        <input id="88888888888888888" type="number" class="form-control{{ $errors->has('88888888888888888') ? ' is-invalid' : '' }}" name="88888888888888888" value="{{ old('88888888888888888') }}" required>

        @if ($errors->has('88888888888888888'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('88888888888888888') }}</strong>
            </span>
        @endif
    </div>
</div>

{{-- DATE --}}
<div class="form-group row">
    <label for="88888888888888888" class="col-md-3 col-form-label text-md-right">{{ __('88888888888888888') }}</label>

    <div class="col-md-8">
        <input id="88888888888888888" type="date" class="form-control{{ $errors->has('88888888888888888') ? ' is-invalid' : '' }}" name="88888888888888888" value="{{ old('88888888888888888') }}" required>

        @if ($errors->has('88888888888888888'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('88888888888888888') }}</strong>
            </span>
        @endif
    </div>
</div>

{{-- URL --}}
<div class="form-group row">
    <label for="88888888888888888" class="col-md-3 col-form-label text-md-right">{{ __('88888888888888888') }}</label>

    <div class="col-md-8">
        <input id="88888888888888888" type="url" class="form-control{{ $errors->has('88888888888888888') ? ' is-invalid' : '' }}" name="88888888888888888" value="{{ old('88888888888888888') }}" required>

        @if ($errors->has('88888888888888888'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('88888888888888888') }}</strong>
            </span>
        @endif
    </div>
</div>

{{-- FILE Upload ( add in form:   enctype="multipart/form-data" ) --}}
<div class="form-group row">
    <label for="88888888888888888" class="col-md-3 col-form-label text-md-right">{{ __('88888888888888888') }}</label>

    <div class="col-md-8">
        <input id="88888888888888888" type="file" class="form-control-file{{ $errors->has('88888888888888888') ? ' is-invalid' : '' }}" name="88888888888888888" value="{{ old('88888888888888888') }}" required>

        @if ($errors->has('88888888888888888'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('88888888888888888') }}</strong>
            </span>
        @endif
    </div>
</div>

{{-- MULTIPLE FILE Upload ( add in name input : name[] ) - ( add in form:   enctype="multipart/form-data" ) --}}
<div class="form-group row">
    <label for="88888888888888888" class="col-md-3 col-form-label text-md-right">{{ __('88888888888888888') }}</label>

    <div class="col-md-8">
        <input id="88888888888888888" type="file" class="form-control-file{{ $errors->has('88888888888888888') ? ' is-invalid' : '' }}" name="88888888888888888[]" multiple value="{{ old('88888888888888888') }}" required>

        @if ($errors->has('88888888888888888'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('88888888888888888') }}</strong>
            </span>
        @endif
    </div>
</div>

{{-- In the controler, to save the files --}}
<?php
    // Validate attributes
    $attributes = request()->validate([
        'name' => ['required', 'min:3'],
        'tag' => ['required', 'min:2']
    ]);

    // Store each file in a database row
    if ($request->hasFile('name')) {
        foreach ($request->file as $file) {
            $path = $file->store('console_icons'); // Upload the file and retrieve path
            $full_path = "/uploads/".$path; // append full path to the retrieved path

            $attributes['icon_path'] = $full_path;
            Game::create($attributes);
        }
    }
?>

{{-- SELECT dropdown --}}
<div class="form-group row">
    <label for="88888888888888888" class="col-md-3 col-form-label text-md-right">{{ __('88888888888888888') }}</label>

    <div class="col-md-8">
        <select id="88888888888888888" class="form-control{{ $errors->has('88888888888888888') ? ' is-invalid' : '' }}" name="88888888888888888" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    
        @if ($errors->has('88888888888888888'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('88888888888888888') }}</strong>
            </span>
        @endif
    </div>
</div>

