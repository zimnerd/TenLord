<!-- /resources/views/tenant/show.blade.php -->

<?php $__env->startSection('title', $tenant->name .' Tenant Details'); ?>
<?php $__env->startSection('Sidebar', 'Tenants'); ?>
<?php $__env->startSection('sidebar'); ?>
    @parent

    <p>This is appended to the master sidebar.</p>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <p><?php echo e($tenant->name); ?></p>
    <p><?php echo e($unit->name); ?></p>
    


    <?php echo link_to_route('properties.units.tenants.edit', 'Edit', array($property->id, $unit->id,$tenant->id), array('class' => 'btn btn-info')); ?>,

    <?php echo Form::submit('Delete', array('class' => 'btn btn-danger')); ?>



    <p>
        <?php echo link_to_route('properties.index', 'Back to Properties','', array('class' => 'btn btn-info')); ?>

    </p>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>