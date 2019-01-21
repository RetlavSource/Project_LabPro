
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
    <label for="88888888888888888" class="col-md-4 col-form-label text-md-right">{{ __('88888888888888888') }}</label>

    <div class="col-md-6">
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
            <input id="88888888888888888" type="text" class="form-control{{ $errors->has('88888888888888888') ? ' is-invalid' : '' }}" name="88888888888888888" value="{{ old('88888888888888888') }}" required>
    
            @if ($errors->has('88888888888888888'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('88888888888888888') }}</strong>
                </span>
            @endif
        </div>
    </div>