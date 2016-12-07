<!-- /resources/views/unit/show.blade.php -->

<?php $__env->startSection('title', $unit->name .' @'.$property->name. ' Property'); ?>
<?php $__env->startSection('Sidebar', 'Units'); ?>
<?php $__env->startSection('content'); ?>

    <p>Unit name: <?php echo e($unit->name); ?></p>
    <p>Unit Number: <?php echo e($unit->unit_number); ?></p>
    <p>Rent Amount: R<?php echo e($unit->rental_amount); ?></p>
    <p>Deposit: R<?php echo e($unit->deposit); ?></p>
    <p>Bedrooms: <?php echo e($unit->bedrooms); ?></p>
    <p>Bathrooms: <?php echo e($unit->bathrooms); ?></p>

    <?php if($tenant): ?>
<h4 class="page-header">Tenant Details</h4>
    <p>Name: <?php echo e($tenant->name); ?></p>
    <p>Email: <?php echo e($tenant->email); ?></p>
    <p>Phone: <?php echo e($tenant->phone); ?></p>
    <p>NoK: <?php echo e($tenant->next_of_kin); ?></p>
    <p>Company: <?php echo e($tenant->company_name); ?></p>
    <p>Application status: <?php echo e($tenant->application); ?></p>
<?php else: ?>
        <p class="alert-warning">No Tenant allocated</p>

        <p>
            <?php echo link_to_route('properties.index', 'Back to Properties'); ?> |
            <?php echo link_to_route('properties.tenants.create', 'Add Tenant', $property->id); ?>

        </p>

        <?php endif; ?>
    <?php echo link_to_route('properties.units.edit', 'Edit', array($property->id, $unit->id), array('class' => 'btn btn-info')); ?>,

    <?php echo Form::submit('Delete', array('class' => 'btn btn-danger')); ?>









<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>