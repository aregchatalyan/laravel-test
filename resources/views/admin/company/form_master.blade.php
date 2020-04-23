<div class="row">
    <div class="col-sm-2">
        <label for="name">Name</label>
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            <input class="form-control" id="name" placeholder="Name..." name="name" type="text"
                   value="{{ $company->name ?? '' }}">
            <p>{{ $errors->first('name', ':message') }}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        <label for="email">Email</label>
    </div>
    <div class="col-sm-10">
        <div class="form-group">
            <input class="form-control" id="email" placeholder="Email..." name="email" type="text" value="{{ $company->email ?? '' }}">
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-sm-2">
        <label for="logo">Logo</label>
    </div>
    <div class="col-sm-10">
        <div class="custom-file {{ $errors->has('logo') ? 'has-error' : '' }}">
            <label for="logo" class="custom-file-label">Choose file</label>
            <input name="logo" type="file" id="logo">
            <p class="mt-2">{{ $errors->first('logo', ':message') }}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        <label for="website">Website</label>
    </div>
    <div class="col-sm-10">
        <div class="form-group">
            <input class="form-control" id="website" placeholder="Website..." name="website" type="text"  value="{{ $company->website ?? '' }}">
        </div>
    </div>
</div>

<div class="form-group">
    <button class="btn btn-success" type="submit">{{ isset($model) ? 'Update' : 'Save' }}</button>
</div>

