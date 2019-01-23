<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('name') ? ' has-error' : '' !!} ">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    @if ($errors->has('name'))
        <span class="help-block">
            <strong>{!! $errors->first('name') !!}</strong>
        </span>
    @endif
</div>
<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('email') ? ' has-error' : '' !!} ">
    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
    @if ($errors->has('email'))
        <span class="help-block">
            <strong>{!! $errors->first('email') !!}</strong>
        </span>
    @endif
</div>
<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('address') ? ' has-error' : '' !!} ">
    {!! Form::label('address', 'Address') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
    @if ($errors->has('address'))
        <span class="help-block">
            <strong>{!! $errors->first('address') !!}</strong>
        </span>
    @endif
</div>
<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('status') ? ' has-error' : '' !!} ">
    {!! Form::label('status', 'Status') !!}
    {!! Form::select('status', $status, null, ['class' => 'form-control']) !!}
    @if ($errors->has('status'))
        <span class="help-block">
            <strong>{!! $errors->first('status') !!}</strong>
        </span>
    @endif
</div>
<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('status') ? ' has-error' : '' !!} ">
    <button class='btn btn-success'>Submit</button>
    <a href="{!! route('employees.index') !!}" class='btn btn-primary'>Trở về</a>
</div>