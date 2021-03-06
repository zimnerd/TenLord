<!-- /resources/views/propertys/index.blade.php -->

<?php $__env->startSection('title', $property->name .' Tenants'); ?>
<?php $__env->startSection('Sidebar', 'Tenants'); ?>

<?php $__env->startSection('content'); ?>


    <h2>Property has <?php echo e($property->tenants->count()); ?> tenants</h2>



    <?php if(count($property->tenants) == 0): ?>
        Your Unit has no tenants.

    <?php else: ?>
        <ul>
            <?php $__currentLoopData = $property->tenants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tenant): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <li>
                    <?php echo Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('properties.units.tenants.destroy', $property->id, $unit->id,$tenant->id))); ?>

                    <a href="<?php echo e(route('properties.units.tenants.show', [$property->id, $unit->id,$tenant->id])); ?>"><?php echo e($tenant->name); ?></a>

                    <?php echo link_to_route('properties.units.tenants.edit', 'Edit', array($property->id,$unit->id, $tenant->id), array('class' => 'btn btn-info')); ?>,

                    <?php echo Form::submit('Delete', array('class' => 'btn btn-danger')); ?>


                    <?php echo Form::close(); ?>

                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </ul>
    <?php endif; ?>

    <p>
        <?php echo link_to_route('properties.index', 'Back to Units'); ?> |
        <?php echo link_to_route('properties.units.tenants.create', 'Create Tenant', array($property->id,$unit->id)); ?>

    </p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>