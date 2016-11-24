<!-- /resources/tenants/units/partials/_form.blade.php -->

<div class="form-group col-lg-6" >
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name') !!}
</div>

<div class="form-group col-lg-6">
    {!! Form::label('employment', 'Employment Duration:') !!}
    {!! Form::text('employment') !!}
</div>

<div class="form-group col-lg-6">
    {!! Form::label('income', 'Salary:') !!}
    {!! Form::text('income') !!}
</div>

<div class="form-group col-lg-6">
    {!! Form::label('lease', 'Lease Status:') !!}
    {!! Form::text('lease') !!}
</div>


<div class="form-group col-lg-6">
    {!! Form::label('application', 'Application Status:') !!}
    {!! Form::text('application') !!}
</div>
<div class="form-group col-lg-6">
    {!! Form::label('references', 'Referees Email:') !!}
    {!! Form::email('references') !!}
</div>
<div class="form-group col-lg-6">
    {!! Form::label('company_name', 'Company Name:') !!}
    {!! Form::text('company_name') !!}
</div>

<div class="form-group col-lg-6">
    {!! Form::label('email', 'Your email address:') !!}
    {!! Form::email('email') !!}
</div>

<div class="form-group col-lg-6">
    {!! Form::label('phone', 'Phone Number:') !!}
    {!! Form::number('phone') !!}
</div>

<div class="form-group col-lg-6">
    {!! Form::label('next_of_kin', 'Next Of Kin:') !!}
    {!! Form::text('next_of_kin') !!}
</div>
<div class="form-group col-lg-6">
    {!! Form::label('id_number', 'ID Number:') !!}
    {!! Form::text('id_number') !!}
</div>

<div class="form-group col-lg-6">
    {!! Form::label('rental_history', 'Rental History:') !!}
    {!! Form::text('rental_history') !!}
</div>




<div class="form-group col-lg-6">

    {!! Form::label('unit_id', 'Allocate Unit') !!}
    {!! Form::select('unit_id',  $property->units->pluck('name', 'id'), Input::old('unit_id'), ['class' => 'form-control']) !!}
</div>


<div class="form-group col-lg-12">
    {!! Form::submit($submit_text, ['class' => 'btn btn-large btn-primary'])!!}
</div>

