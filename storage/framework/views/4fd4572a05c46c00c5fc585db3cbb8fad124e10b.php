<!-- /resources/tenants/units/partials/_form.blade.php -->

<div class="form-group col-lg-6" >
    <?php echo Form::label('name', 'Name:'); ?>

    <?php echo Form::text('name'); ?>

</div>

<div class="form-group col-lg-6">
    <?php echo Form::label('email', 'Your email address:'); ?>

    <?php echo Form::email('email'); ?>

</div>

<div class="form-group col-lg-6">
    <?php echo Form::label('phone', 'Phone Number:'); ?>

    <?php echo Form::number('phone'); ?>

</div>



<div class="form-group col-lg-12">
    <?php echo Form::submit($submit_text, ['class' => 'btn btn-large btn-primary']); ?>

</div>

