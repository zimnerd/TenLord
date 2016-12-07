<!-- /resources/views/tenants/edit.blade.php -->

<?php $__env->startSection('title', 'Edit ' .$owner->name); ?>
<?php $__env->startSection('Sidebar', 'Owners'); ?>

<?php $__env->startSection('content'); ?>

    <?php echo Form::model($owner, ['method' => 'PATCH', 'route' => ['properties.owners.update', $property->id, $owner->id]]); ?>

    <?php echo $__env->make('owners/partials/_form', ['submit_text' => 'Edit Owner'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>