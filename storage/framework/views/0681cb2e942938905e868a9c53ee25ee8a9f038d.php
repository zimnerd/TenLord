<!-- /resources/views/owners/show.blade.php -->

<?php $__env->startSection('title', $owner->name .' Owner Details'); ?>
<?php $__env->startSection('Sidebar', 'Owners'); ?>
<?php $__env->startSection('sidebar'); ?>
    @parent

    <p>This is appended to the master sidebar.</p>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <p><?php echo e($owner->name); ?></p>
    <?php echo link_to_route('properties.owners.edit', 'Edit', array($property->id, $owner->id), array('class' => 'btn btn-info')); ?>,

    <?php echo Form::submit('Delete', array('class' => 'btn btn-danger')); ?>



    <p>
        <?php echo link_to_route('properties.index', 'Back to Properties'); ?>

    </p>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>