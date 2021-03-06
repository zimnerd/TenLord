<!-- /resources/views/owners/create.blade.php -->

<?php $__env->startSection('Sidebar', 'Owners'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Create Owner for "<?php echo e($property->name); ?>"</h2>

    <?php echo Form::model(new App\Owner, ['route' => ['properties.units.owners.store', $property->id,$unit->id], 'class'=>'']); ?>

    <?php echo $__env->make('owners/partials/_form', ['submit_text' => 'Create Owner'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>