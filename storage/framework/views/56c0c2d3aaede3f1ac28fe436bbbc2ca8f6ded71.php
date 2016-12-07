<!-- /resources/views/owners/show.blade.php -->

<?php $__env->startSection('title', 'Owner Details for: ' .$owner->name ); ?>
<?php $__env->startSection('Sidebar', 'Owners'); ?>
<?php $__env->startSection('sidebar'); ?>
    @parent

    <p>This is appended to the master sidebar.</p>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<table class="table table-bordered table-striped table-hover">
    <tr>
        <td>Name</td>
        <td><?php echo e($owner->name); ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo e($owner->email); ?></td>
    </tr>
    <tr>
        <td>Phone </td>
        <td><?php echo e($owner->phone); ?></td>
    </tr>
    <tr>
        <td>Unit Name </td>
        <td><?php echo e($unit->name); ?></td>
    </tr>
    <tr>
        <td>Property Name </td>
        <td><?php echo e($owner->property->name); ?></td>
    </tr>

</table>
    <?php echo link_to_route('properties.units.owners.edit', 'Edit', array($property->id,$unit->id, $owner->id), array('class' => 'btn btn-info')); ?>,

    <?php echo Form::submit('Delete', array('class' => 'btn btn-danger')); ?>



    <p>
        <?php echo link_to_route('properties.index', 'Back to Properties'); ?>

    </p>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>