<!-- /resources/views/properties/index.blade.php -->

<?php $__env->startSection('title', 'Properties'); ?>
<?php $__env->startSection('Sidebar', 'Properties'); ?>
<?php $__env->startSection('content'); ?>
    <h2>Properties</h2>

    <?php if( !$properties->count() ): ?>
        You have no properties
    <?php else: ?>

            <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

                <div class="tenlist row">
                    <?php echo Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('properties.destroy', $property->id))); ?>

                    <div class="col-md-12 "> <a href="<?php echo e(route('properties.show', $property->id)); ?>"><?php echo e($property->name); ?></a><?php echo e(' ' . $property->units->count() .' Units'); ?>


                        <?php echo Form::submit('Delete', array('class' => 'btn btn-danger pull-right')); ?>

                        <?php echo link_to_route('properties.edit', 'Edit', array($property->id), array('class' => 'btn btn-info pull-right')); ?>




                    <?php echo Form::close(); ?></div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

    <?php endif; ?>

    <p>
        <?php echo link_to_route('properties.create', 'Create Property'); ?>

    </p>
<?php $__env->stopSection(); ?>









<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>