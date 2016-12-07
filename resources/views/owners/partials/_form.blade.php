<!-- /resources/tenants/units/partials/_form.blade.php -->

<div class="form-group col-lg-6" >
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name') !!}
</div>

<div class="form-group col-lg-6">
    {!! Form::label('email', 'Your email address:') !!}
    {!! Form::email('email') !!}
</div>

<div class="form-group col-lg-6">
    {!! Form::label('phone', 'Phone Number:') !!}
    {!! Form::number('phone') !!}
</div>



<div class="form-group col-lg-12">
    {!! Form::submit($submit_text, ['class' => 'btn btn-large btn-primary'])!!}
</div>

