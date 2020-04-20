<div class="row">
    <div class="col-sm-3">
        {!! form::label('first_name','First Name') !!}
    </div>
    <div class="col-sm-9">
        <div class="form-group {{ $errors->has('first_name') ? 'has-error' : "" }}">
            {{ Form::text('first_name',NULL, ['class'=>'form-control',  'id'=>'first_name', 'placeholder'=>'First Name...']) }}
            {{ $errors->first('first_name', ':message') }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-3">
        {!! form::label('last_name','Last Name') !!}
    </div>
    <div class="col-sm-9">
        <div class="form-group {{ $errors->has('first_name') ? 'has-error' : "" }}">
            {{ Form::text('last_name',NULL, ['class'=>'form-control',  'id'=>'last_name', 'placeholder'=>'Last Name...']) }}
            {{ $errors->first('last_name', ':message') }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-3">
        {!! form::label('company','Company') !!}
    </div>
    <div class="col-sm-9">
        <div class="form-group {{ $errors->has('company_id') ? 'has-error' : "" }}">
            {{ Form::select('company_id',$company,NULL, ['class'=>'form-control',  'id'=>'company', 'placeholder'=>'Company...']) }}
            {{ $errors->first('company_id', ':message') }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-3">
        {!! form::label('email','Email') !!}
    </div>
    <div class="col-sm-9">
        <div class="form-group {{ $errors->has('email') ? 'has-error' : "" }}">
            {{ Form::text('email',NULL, ['class'=>'form-control', 'id'=>'email', 'placeholder'=>'Email...']) }}
            {{ $errors->first('email', ':message') }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-3">
        {!! form::label('phone','Phone') !!}
    </div>
    <div class="col-sm-9">
        <div class="form-group {{ $errors->has('phone') ? 'has-error' : "" }}">
            {{ Form::text('phone',NULL, ['class'=>'form-control', 'id'=>'phone', 'placeholder'=>'Phone...']) }}
            {{ $errors->first('phone', ':message') }}
        </div>
    </div>
</div>

<div class="form-group">
    {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>

