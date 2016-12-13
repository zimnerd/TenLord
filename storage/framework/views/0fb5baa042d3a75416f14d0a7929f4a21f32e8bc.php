<!-- /resources/views/units/partials/_form.blade.php -->
<div class="form-group col-md-6">
    <?php echo Form::label('name', 'Name:'); ?>

    <?php echo Form::text('name'); ?>

</div>

<div class="form-group col-md-6">
    <?php echo Form::label('bedrooms', 'Number of Bedrooms:'); ?>

    <?php echo Form::number('bedrooms'); ?>

</div>

<div class="form-group col-md-6">
    <?php echo Form::label('bathrooms', 'Number of Bathrooms:'); ?>

    <?php echo Form::number('bathrooms'); ?>

</div>

<div class="form-group col-md-6">
    <?php echo Form::label('size', 'Size:'); ?>

    <?php echo Form::number('size'); ?>

</div>


<div class="form-group col-md-6">
    <?php echo Form::label('unit_number', 'Unit Number:'); ?>

    <?php echo Form::text('unit_number'); ?>

</div>
<div class="form-group col-md-6">
    <?php echo Form::label('status', 'Status:'); ?>

    <?php echo Form::text('status'); ?>

</div>
<div class="form-group col-md-6">
    <?php echo Form::label('features', 'Features:'); ?>

    <?php echo Form::text('features'); ?>

</div>

<div class="form-group col-md-6">
    <?php echo Form::label('deposit', 'Deposit Amount:'); ?>

    <?php echo Form::number('deposit'); ?>

</div>

<div class="form-group col-md-6">
    <?php echo Form::label('rental_amount', 'Rental Amount:'); ?>

    <?php echo Form::number('rental_amount'); ?>

</div>

<div class="form-group col-md-6">
    <?php echo Form::label('market_rent', 'Market Rent Amount:'); ?>

    <?php echo Form::number('market_rent'); ?>

</div>

<div class="form-group col-md-6">
    <?php echo Form::label('description', 'Description:'); ?>

    <?php echo Form::textarea('description'); ?>

</div>

<div class="form-group col-md-12">
    <?php echo Form::submit($submit_text, ['class' => 'btn btn-large btn-primary']); ?>

</div>