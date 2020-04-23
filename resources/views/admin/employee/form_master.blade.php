<div class="row">
    <div class="col-sm-3">
        <label for="first_name">First Name</label>
    </div>
    <div class="col-sm-9">
        <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
            <input class="form-control" id="first_name" placeholder="First Name..." name="first_name" type="text"
                   value="{{ $employee->first_name ?? '' }}">
            <p>{{ $errors->first('first_name', ':message') }}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-3">
        <label for="last_name">Last Name</label>
    </div>
    <div class="col-sm-9">
        <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
            <input class="form-control" id="last_name" placeholder="Last Name..." name="last_name" type="text"
                   value="{{ $employee->last_name ?? '' }}">
            <p>{{ $errors->first('last_name', ':message') }}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-3">
        <label for="company">Company</label>
    </div>
    <div class="col-sm-9">
        <div class="form-group">
            <select id="company" class="form-control" name="company_id">
                @foreach($company as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-3">
        <label for="email">Email</label>
    </div>
    <div class="col-sm-9">
        <div class="form-group">
            <input class="form-control" id="email" placeholder="Email..." name="email" type="text" value="{{ $employee->email ?? '' }}">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-3">
        <label for="phone">Phone</label>
    </div>
    <div class="col-sm-9">
        <div class="form-group">
            <input class="form-control" id="phone" placeholder="Phone..." name="phone" type="text" value="{{ $employee->phone ?? '' }}">
        </div>
    </div>
</div>

<div class="form-group">
    <button class="btn btn-success" type="submit">{{ isset($model) ? 'Update' : 'Save' }}</button>
</div>

