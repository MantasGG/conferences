<div class="form-group">
    <div class="card-header">{{ __('Title') }}</div>
    <div class="card-body">
        <input id="title-input" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', optional($conference ?? null)->title) }}" required autocomplete="title" autofocus>
    </div>
    @error('title')
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <div class="card-header">{{ __('Description') }}</div>
    <div class="card-body">
        <textarea id="description-input" class="form-control @error('description') is-invalid @enderror" name="description" rows="3" required>{{ old('description', optional($conference ?? null)->description) }}</textarea>
    </div>
    @error('description')
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <div class="card-header">{{ __('Date') }}</div>
    <div class="card-body">
        <input id="date-input" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date', optional($conference ?? null)->date) }}" required>
    </div>
    @error('date')
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <div class="card-header">{{ __('Address') }}</div>
    <div class="card-body">
        <input id="address-input" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address', optional($conference ?? null)->address) }}" required>
    </div>
    @error('address')
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<br>
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
