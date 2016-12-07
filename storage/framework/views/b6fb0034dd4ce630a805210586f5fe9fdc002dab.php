<!-- /resources/views/properties/show.blade.php -->

<?php $__env->startSection('title', 'View '.$property->name. ' `propery details' ); ?>
<?php $__env->startSection('Sidebar', 'Properties'); ?>
<?php $__env->startSection('content'); ?>


    <h3>Property has <?php echo e($property->units->count()); ?> units</h3>



        <?php if(count($property->units) == 0): ?>
        Your property has no units.

    <?php else: ?>
            <?php $__currentLoopData = $property->units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <div class="tenlist row"><div class="col-md-12 ">
                        <?php echo Form::open(['method' => 'DELETE',
                               'route' => ['properties.units.destroy', $property->id, $unit->id]]); ?>

                    <a href="<?php echo e(route('properties.units.show', [$property->id, $unit->id])); ?>"><?php echo e($unit->name); ?></a>
                        <?php echo Form::submit('Delete', array('class' => 'btn btn-danger pull-right')); ?>

                        <?php echo link_to_route('properties.units.edit', 'Edit', array($property->id, $unit->id), array('class' => 'btn btn-info pull-right')); ?>

                            <?php echo Form::close(); ?>


</div>

                </div>


            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

    <?php endif; ?>

<hr>


    <h3>Property has <?php echo e($property->tenants->count()); ?> tenants</h3>



    <?php if(count($property->tenants) == 0): ?>
        Your property has no tenants.

    <?php else: ?>
        <?php $__currentLoopData = $property->tenants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tenant): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <div class="tenlist row">
                <div class="col-md-12">
                    <?php echo Form::open(['method' => 'DELETE',
                       'route' => ['properties.tenants.destroy', $property->id, $tenant->id]]); ?>

                    <a href="<?php echo e(route('properties.tenants.show', [$property->id, $tenant->id])); ?>"><?php echo e($tenant->name); ?></a>
                  <?php echo e('Unit Number: ' .$tenant->unit_id); ?>

                    <?php echo Form::submit('Delete', array('class' => 'btn btn-danger pull-right')); ?>

                     <?php echo link_to_route('properties.tenants.edit', 'Edit', array($property->id, $tenant->id), array('class' => 'btn btn-info pull-right')); ?>


                        <?php echo Form::close(); ?>

                    </div>
            </div>


        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

    <?php endif; ?>

    <hr>




    <?php if(count($property->owners) == 0): ?>
        Your property has no owner.

    <?php else: ?>
        <h3>Property has <?php echo e($property->owners->count()); ?> owners</h3>
        <?php $__currentLoopData = $property->owners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $owner): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <div class="tenlist row">
                <div class="col-md-12">
                    <?php echo Form::open(['method' => 'DELETE',
                       'route' => ['properties.owners.destroy', $property->id, $owner->id]]); ?>

                    <a href="<?php echo e(route('properties.owners.show', [$property->id, $owner->id])); ?>"><?php echo e($owner->name); ?></a>
                    <?php echo e('Property Name: ' .$property->name); ?>

                    <?php echo Form::submit('Delete', array('class' => 'btn btn-danger pull-right')); ?>

                    <?php echo link_to_route('properties.owners.edit', 'Edit', array($property->id, $owner->id), array('class' => 'btn btn-info pull-right')); ?>


                    <?php echo Form::close(); ?>

                </div>
            </div>


        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

    <?php endif; ?>

    <hr>
















    <p>
        <?php echo link_to_route('properties.index', 'Back to Properties'); ?> |
        <?php echo link_to_route('properties.units.create', 'Create Unit', $property->id); ?> |
        <?php echo link_to_route('properties.tenants.create', 'Add Tenant', $property->id); ?>|
        <?php echo link_to_route('properties.owners.create', 'Add Owner', $property->id); ?>

    </p>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>