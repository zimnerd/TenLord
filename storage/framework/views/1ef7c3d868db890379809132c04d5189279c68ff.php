<!-- /resources/views/units/index.blade.php -->

<?php $__env->startSection('title', $property->name .' Units'); ?>
<?php $__env->startSection('Sidebar', 'Units'); ?>
<?php $__env->startSection('content'); ?>


    <h2>Property has <?php echo e($property->units->count()); ?> units</h2>



    <?php if(count($property->units) == 0): ?>
        Your property has no units.

    <?php else: ?>
        <ul>
            <?php $__currentLoopData = $property->units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <li>
                    <?php echo Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('properties.units.destroy', $property->id, $unit->id))); ?>

                    <a href="<?php echo e(route('properties.units.show', [$property->id, $unit->id])); ?>"><?php echo e($unit->name); ?></a>

                    <?php echo link_to_route('properties.units.edit', 'Edit', array($property->id, $unit->id), array('class' => 'btn btn-info')); ?>,

                    <?php echo Form::submit('Delete', array('class' => 'btn btn-danger')); ?>


                    <?php echo Form::close(); ?>

                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        </ul>
    <?php endif; ?>

    <p>
        <?php echo link_to_route('properties.index', 'Back to Properties','', array('class' => 'btn btn-info')); ?> |
        <?php echo link_to_route('properties.units.create', 'Create Unit', $property->id,, array('class' => 'btn btn-success')); ?>

    </p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>