<!-- /resources/views/units/partials/_form.blade.php -->
<div class="form-group col-md-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name') !!}
</div>

<div class="form-group col-md-6">
    {!! Form::label('bedrooms', 'Number of Bedrooms:') !!}
    {!! Form::number('bedrooms') !!}
</div>

<div class="form-group col-md-6">
    {!! Form::label('bathrooms', 'Number of Bathrooms:') !!}
    {!! Form::number('bathrooms') !!}
</div>

<div class="form-group col-md-6">
    {!! Form::label('size', 'Size:') !!}
    {!! Form::number('size') !!}
</div>


<div class="form-group col-md-6">
    {!! Form::label('unit_number', 'Unit Number:') !!}
    {!! Form::text('unit_number') !!}
</div>
<div class="form-group col-md-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status') !!}
</div>
<div class="form-group col-md-6">
    {!! Form::label('features', 'Features:') !!}
    {!! Form::text('features') !!}
</div>

<div class="form-group col-md-6">
    {!! Form::label('deposit', 'Deposit Amount:') !!}
    {!! Form::number('deposit') !!}
</div>

<div class="form-group col-md-6">
    {!! Form::label('rental_amount', 'Rental Amount:') !!}
    {!! Form::number('rental_amount') !!}
</div>

<div class="form-group col-md-6">
    {!! Form::label('market_rent', 'Market Rent Amount:') !!}
    {!! Form::number('market_rent') !!}
</div>

<div class="form-group col-md-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description') !!}
</div>

<div class="form-group col-md-12">
    {!! Form::submit($submit_text, ['class' => 'btn btn-large btn-primary']) !!}
</div>