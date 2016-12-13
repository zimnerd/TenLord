<!-- /resources/views/unit/show.blade.php -->

<?php $__env->startSection('title', $unit->name .' @'.$property->name. ' Property'); ?>
<?php $__env->startSection('Sidebar', 'Units'); ?>
<?php $__env->startSection('sidebar'); ?>
    @parent
    <div><span class="glyphicon glyphicon-bed"></span> <a href="<?php echo e(route('properties.show', [$property->id])); ?>"><?php echo e(' ' .$property->units->count() . ' units in total'); ?></a></div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <h4 class="page-header">Unit Details</h4>

    <td>Unit name</td>
            <td><?php echo e($unit->name); ?></td>
            </tr>
        <tr>
    <td>Unit Number</td>
            <td><?php echo e($unit->unit_number); ?></td>
        </tr>
        <tr>
    <td>Rent Amount</td>

            <td>R<?php echo e($unit->rental_amount); ?></td>
        </tr>
        <tr>
    <td>Deposit</td>

            <td><?php echo e($unit->deposit); ?></td>
        </tr>
        <tr>
    <td>Bedrooms</td>

            <td> <?php echo e($unit->bedrooms); ?></td>
        </tr>
        <tr>
    <td>Bathrooms</td>
            <td><?php echo e($unit->bathrooms); ?></td>
</tr>
        </table>
    <?php if($tenant): ?>
        <table class="table table-bordered table-striped table-hover">
            <tr>
<h4 class="page-header">Tenant Details</h4>
    <td>Unit Name</td></td>
                <td><?php echo e($tenant->name); ?></td></td>
            </tr>
            <tr>
    <td>Email</td>
                <td><?php echo e($tenant->email); ?></td>
            </tr>
            <tr>
    <td>Phone</td>
                <td><?php echo e($tenant->phone); ?></td>
            </tr>
            <tr>
    <td>Next of Kin</td>
                <td><?php echo e($tenant->next_of_kin); ?></td>
            </tr>
            <tr>
    <td>Company</td>
                <td><?php echo e($tenant->company_name); ?></td>
            </tr>
            <tr>
    <td>Application status</td>
                <td><?php echo e($tenant->application); ?></td>
                </tr>
            </table>
<?php else: ?>
        <p class="alert-warning">No Tenant allocated</p>

        <p>

            <?php echo link_to_route('properties.units.tenants.create', 'Add Tenant', [$property->id,$unit->id], array('class' => 'btn btn-success')); ?>

        </p>

        <?php endif; ?>
    <?php echo link_to_route('properties.index', 'Back to Properties','', array('class' => 'btn btn-info')); ?> |
    <?php echo link_to_route('properties.units.edit', 'Edit', array($property->id, $unit->id), array('class' => 'btn btn-info')); ?> |
    <?php echo Form::submit('Delete', array('class' => 'btn btn-danger')); ?>









<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>