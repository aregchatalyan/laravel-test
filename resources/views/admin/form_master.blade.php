<div class="row">
    <div class="col-sm-2">
        {!! form::label('name','Name') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('name') ? 'has-error' : "" }}">
            {{ Form::text('name',NULL, ['class'=>'form-control',  'id'=>'name', 'placeholder'=>'Name...']) }}
            {{ $errors->first('name', ':message') }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        {!! form::label('email','Email') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('email') ? 'has-error' : "" }}">
            {{ Form::text('email',NULL, ['class'=>'form-control', 'id'=>'email', 'placeholder'=>'Email...']) }}
            {{ $errors->first('email', ':message') }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        {!! form::label('logo','Logo') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('logo') ? 'has-error' : "" }}">
            {{ Form::file('logo',NULL, ['class'=>'form-control', 'id'=>'logo']) }}
            {{ $errors->first('logo', ':message') }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        {!! form::label('website','Website') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('website') ? 'has-error' : "" }}">
            {{ Form::text('website',NULL, ['class'=>'form-control', 'id'=>'website', 'placeholder'=>'Website...']) }}
            {{ $errors->first('website', ':message') }}
        </div>
    </div>
</div>

<div class="form-group">
    {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>

