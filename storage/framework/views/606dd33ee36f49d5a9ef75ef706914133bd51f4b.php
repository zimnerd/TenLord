<!-- /resources/tenants/units/partials/_form.blade.php -->

<div class="form-group col-lg-6" >
    <?php echo Form::label('name', 'Name:'); ?>

    <?php echo Form::text('name'); ?>

</div>

<div class="form-group col-lg-6">
    <?php echo Form::label('employment', 'Employment Duration:'); ?>

    <?php echo Form::text('employment'); ?>

</div>

<div class="form-group col-lg-6">
    <?php echo Form::label('income', 'Salary:'); ?>

    <?php echo Form::text('income'); ?>

</div>

<div class="form-group col-lg-6">
    <?php echo Form::label('lease', 'Lease Status:'); ?>

    <?php echo Form::text('lease'); ?>

</div>


<div class="form-group col-lg-6">
    <?php echo Form::label('application', 'Application Status:'); ?>

    <?php echo Form::text('application'); ?>

</div>
<div class="form-group col-lg-6">
    <?php echo Form::label('references', 'Referees Email:'); ?>

    <?php echo Form::email('references'); ?>

</div>
<div class="form-group col-lg-6">
    <?php echo Form::label('company_name', 'Company Name:'); ?>

    <?php echo Form::text('company_name'); ?>

</div>

<div class="form-group col-lg-6">
    <?php echo Form::label('email', 'Your email address:'); ?>

    <?php echo Form::email('email'); ?>

</div>

<div class="form-group col-lg-6">
    <?php echo Form::label('phone', 'Phone Number:'); ?>

    <?php echo Form::number('phone'); ?>

</div>

<div class="form-group col-lg-6">
    <?php echo Form::label('next_of_kin', 'Next Of Kin:'); ?>

    <?php echo Form::text('next_of_kin'); ?>

</div>
<div class="form-group col-lg-6">
    <?php echo Form::label('id_number', 'ID Number:'); ?>

    <?php echo Form::text('id_number'); ?>

</div>

<div class="form-group col-lg-6">
    <?php echo Form::label('rental_history', 'Rental History:'); ?>

    <?php echo Form::text('rental_history'); ?>

</div>




<div class="form-group col-lg-6">

    <?php echo Form::label('unit_id', 'Allocate Unit'); ?>

    <?php echo Form::select('unit_id',  $property->units->pluck('name', 'id'), Input::old('unit_id'), ['class' => 'form-control']); ?>

</div>


<div class="form-group col-lg-12">
    <?php echo Form::submit($submit_text, ['class' => 'btn btn-large btn-primary']); ?>

</div>

