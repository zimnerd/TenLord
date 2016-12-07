<!-- /resources/views/properties/index.blade.php -->

e
<?php $__env->startSection('content'); ?>

    <?php if( !$properties->count() ): ?>
        You have no properties
    <?php else: ?>
            <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>


                <div class="tenlist row">


                    <?php echo Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('properties.destroy', $property->id))); ?>


                        <?php if($property->photos != null): ?>
                            <div class="col-md-3 featured" ><img src="/images/properties/<?php echo e($property->photos); ?>"></div>
                        <?php else: ?>
                            <div class="col-md-3 featured" ><img src="/images/properties/Home.png"></div>
                        <?php endif; ?>


                        <span class="glyphicon glyphicon-home"> Name: </span> <a href="<?php echo e(route('properties.show', $property->id)); ?>"> <?php echo e($property->name .' '); ?></a>

                        <?php echo Form::submit('Delete', array('class' => 'btn btn-danger btn-xs pull-right')); ?>

                        <?php echo link_to_route('properties.edit', 'Edit', array($property->id), array('class' => 'btn btn-xs btn-info pull-right')); ?>


                    <?php echo Form::close(); ?>


                       <div> <span class="glyphicon glyphicon-bed"> Units: </span> <?php echo e('  ' . $property->units->count()); ?> </div>
                        <div><span class="glyphicon glyphicon-check"> Type: </span><?php echo e('  ' .$property->type); ?></div>
                        <div><span class="glyphicon glyphicon-globe"> Country: </span><?php echo e('  ' .$property->country); ?></div>
                        <div><span class="glyphicon glyphicon-map-marker"> City: </span><?php echo e('  ' .$property->city); ?></div>
                        <div><span class="glyphicon glyphicon-calendar"> Date Added: </span>  <?php echo e('  ' .$property->created_at); ?></div>


                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

            <?php echo e($properties->links()); ?>

    <?php endif; ?>

    <p>
        <?php echo link_to_route('properties.create', 'Create Property','', array('class' => 'btn btn-info')); ?>

    </p>

<?php $__env->stopSection(); ?>









<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>