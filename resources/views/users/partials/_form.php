<!-- /resources/views/properties/partials/_form.blade.php -->
<div class="form-group col-md-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name') !!}
</div>


<div class="form-group col-md-6">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location') !!}
</div>

<div class="form-group col-md-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type') !!}
</div>
<div class="form-group col-md-6">
    {!! Form::label('photos', 'Photo:') !!}
    {!! Form::file('photos', null) !!}
</div>
<div class="form-group col-md-6">
    {!! Form::label('account', 'Owner Account:') !!}
    {!! Form::text('account') !!}
</div>
<div class="form-group col-md-6">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::text('country') !!}
</div>
<div class="form-group col-md-6">
    {!! Form::label('province', 'Province:') !!}
    {!! Form::text('province') !!}
</div>
<div class="form-group col-md-6">
    {!! Form::label('city', 'City:') !!}
    {!! Form::text('city') !!}
</div>
<div class="form-group col-md-6">
    {!! Form::label('zip', 'Zip:') !!}
    {!! Form::text('zip') !!}
</div>
<div class="form-group col-md-12">
    {!! Form::submit($submit_text, ['class' => 'btn btn-large btn-primary']) !!}
</div>


