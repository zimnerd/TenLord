<!-- /resources/views/tasks/edit.blade.php -->

<?php $__env->startSection('Sidebar', 'Units'); ?>
<?php $__env->startSection('title', 'Edit ' .$unit->name); ?>
<?php $__env->startSection('content'); ?>
    <h2>Edit Unit "<?php echo e($unit->name); ?>"</h2>

    <?php echo Form::model($unit, ['method' => 'PATCH', 'route' => ['properties.units.update', $property->id, $unit->id]]); ?>

    <?php echo $__env->make('units/partials/_form', ['submit_text' => 'Edit Unit'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>