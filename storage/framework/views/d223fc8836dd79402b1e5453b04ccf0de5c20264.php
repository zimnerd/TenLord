<!-- /resources/views/properties/edit.blade.php -->

<?php $__env->startSection('title', 'Edit Property'); ?>
<?php $__env->startSection('Sidebar', 'Properties'); ?>
<?php $__env->startSection('content'); ?>
    <h2>Edit Property</h2>

    <?php echo Form::model($property, ['method' => 'PATCH', 'route' => ['properties.update', $property->id],'files' => true,'class' => 'form',]); ?>

    <?php echo $__env->make('properties/partials/_form', ['submit_text' => 'Edit Property'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>