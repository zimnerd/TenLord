<!-- /resources/views/propertys/index.blade.php -->

<?php $__env->startSection('title', $property->name .' Owners'); ?>
<?php $__env->startSection('Sidebar', 'Owners'); ?>

<?php $__env->startSection('content'); ?>






    <?php if(count($property->owners) == 0): ?>
        Your Property has no owner.

    <?php else: ?>
        <ul>
            <?php $__currentLoopData = $property->owners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $owner): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <li>
                    <?php echo Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('property.owners.destroy', $property->id, $owner->id))); ?>

                    <a href="<?php echo e(route('property.owner.show', [$property->id, $owner->id])); ?>"><?php echo e($owner->name); ?></a>

                    <?php echo link_to_route('properties.owners.edit', 'Edit', array($property->id, $tenant->id), array('class' => 'btn btn-info')); ?>,

                    <?php echo Form::submit('Delete', array('class' => 'btn btn-danger')); ?>


                    <?php echo Form::close(); ?>

                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </ul>
    <?php endif; ?>

    <p>
        <?php echo link_to_route('properties.index', 'Back to Units'); ?> |
        <?php echo link_to_route('properties.owners.create', 'Create Owner', $property->id); ?>

    </p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>