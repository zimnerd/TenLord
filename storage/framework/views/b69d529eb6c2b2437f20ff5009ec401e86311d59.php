<!-- /resources/views/properties/partials/_form.blade.php -->
<div class="form-group col-md-6">
    <?php echo Form::label('name', 'Name:'); ?>

    <?php echo Form::text('name'); ?>

</div>


<div class="form-group col-md-6">
    <?php echo Form::label('location', 'Location:'); ?>

    <?php echo Form::text('location'); ?>

</div>

<div class="form-group col-md-6">
    <?php echo Form::label('type', 'Type:'); ?>

    <?php echo Form::text('type'); ?>

</div>
<div class="form-group col-md-6">
    <?php echo Form::label('photos', 'Photo:'); ?>

    <?php echo Form::file('photos', null); ?>

</div>
<div class="form-group col-md-6">
    <?php echo Form::label('account', 'Owner Account:'); ?>

    <?php echo Form::text('account'); ?>

</div>
<div class="form-group col-md-6">
    <?php echo Form::label('country', 'Country:'); ?>

    <?php echo Form::text('country'); ?>

</div>
<div class="form-group col-md-6">
    <?php echo Form::label('province', 'Province:'); ?>

    <?php echo Form::text('province'); ?>

</div>
<div class="form-group col-md-6">
    <?php echo Form::label('city', 'City:'); ?>

    <?php echo Form::text('city'); ?>

</div>
<div class="form-group col-md-6">
    <?php echo Form::label('zip', 'Zip:'); ?>

    <?php echo Form::text('zip'); ?>

</div>
<div class="form-group col-md-12">
    <?php echo Form::submit($submit_text, ['class' => 'btn btn-large btn-primary']); ?>

</div>




