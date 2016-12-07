<!-- /resources/views/properties/create.blade.php -->

<?php $__env->startSection('title', 'Add Property'); ?>
<?php $__env->startSection('Sidebar', 'Properties'); ?>
<?php $__env->startSection('content'); ?>
    <h2>Create Property</h2>

    <?php echo Form::model(new App\Property, ['route' => ['properties.store'],'files' => true,'class' => 'form']); ?>

    <?php echo $__env->make('properties/partials/_form', ['submit_text' => 'Create Property'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>