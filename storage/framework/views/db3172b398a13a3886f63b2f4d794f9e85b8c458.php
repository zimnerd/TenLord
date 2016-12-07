<!-- /resources/views/properties/show.blade.php -->

<?php $__env->startSection('title', 'View '.$property->name. ' propery details' ); ?>
<?php $__env->startSection('Sidebar', 'Properties'); ?>
<?php $__env->startSection('sidebar'); ?>
    @parent
    <div><span class="glyphicon glyphicon-home"></span> <a href="<?php echo e(route('properties.index', [$property->id])); ?>"><?php echo e(' ' .$property->count() . ' properties in total'); ?></a></div>
    <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $propert): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

            <?php if($propert->photos != null): ?>
                <h3><?php echo e($propert->name); ?></h3>
                <div class="col-md-12 featured" > <a href="<?php echo e(route('properties.show', $propert->id)); ?>"><img src="/images/properties/<?php echo e($propert->photos); ?>"></a></div>
            <?php else: ?>
                <div class="col-md-12 featured" > <a href="<?php echo e(route('properties.show', $propert->id)); ?>"><img src="/images/properties/Home.png"></a></div>
            <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
   <div> <?php echo e($properties->links()); ?></div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="row property-header">
    <h4 class="page-header">Property has <?php echo e($property->units->count()); ?> units</h4>


<?php if($property->photos != null): ?>
        <div class="col-md-6 header-image" ><img src="/images/properties/<?php echo e($property->photos); ?>"></div>
    <?php else: ?>
        <div class="col-md-6 header-image" ><img src="/images/properties/Home.png"></div>
    <?php endif; ?>
<div class="col-md-6">

    <div> <span class="glyphicon glyphicon-bed"> Units: </span> <?php echo e('  ' . $property->units->count()); ?> </div>
    <div><span class="glyphicon glyphicon-check"> Type: </span><?php echo e('  ' .$property->type); ?></div>
    <div><span class="glyphicon glyphicon-globe"> Country: </span><?php echo e('  ' .$property->country); ?></div>
    <div><span class="glyphicon glyphicon-map-marker"> City: </span><?php echo e('  ' .$property->city); ?></div>
    <div><span class="glyphicon glyphicon-calendar"> Date Added: </span>  <?php echo e('  ' .$property->created_at); ?></div>
</div>

</div>


        <?php if(count($property->units) == 0): ?>
        Your property has no units.

    <?php else: ?>
            <?php $__currentLoopData = $property->units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>


                <div class="tenlist row">
                <div class="col-md-12 units">
                        <?php echo Form::open(['method' => 'DELETE',
                               'route' => ['properties.units.destroy', $property->id, $unit->id]]); ?>

                    <div class="unit"><span class="glyphicon glyphicon-bed"> </span><a href="<?php echo e(route('properties.units.show', [$property->id, $unit->id])); ?>"><?php echo e(' ' .$unit->name); ?></a>
                        <?php echo Form::submit('Delete', array('class' => 'btn btn-xs btn-danger pull-right')); ?>

                        <?php echo link_to_route('properties.units.edit', 'Edit', array($property->id, $unit->id), array('class' => 'btn btn-xs btn-info pull-right')); ?>



       <?php if($unit->tenants->isEmpty()): ?> <?php echo link_to_route('properties.units.tenants.create', 'Add Tenant', [$property->id,$unit->id], array('class' => 'btn btn-success btn-xs pull-right')); ?> 
       <?php endif; ?>

       <?php if(!$unit->owner): ?> <?php echo link_to_route('properties.units.owners.create', 'Add Owner', [$property->id,$unit->id], array('class' => 'btn btn-warning btn-xs pull-right')); ?>

 
      
       <?php endif; ?>


                            <?php echo Form::close(); ?></div>
<?php if(!$unit->tenants->isEmpty()): ?>
                            <?php $__currentLoopData = $unit->tenants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $roja): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>


                            <?php echo Form::open(['method' => 'DELETE',
                               'route' => ['properties.units.tenants.destroy', $property->id, $unit->id,$roja->id]]); ?>


                             <div class="tenant"><span class="glyphicon glyphicon-user"> </span><a href="<?php echo e(route('properties.units.tenants.show', [$property->id, $unit->id,$roja->id])); ?>"><?php echo e(' ' .$roja->name); ?></a>
                             

                             <?php echo Form::submit('Delete', array('class' => 'btn btn-xs btn-danger pull-right')); ?>

                        <?php echo link_to_route('properties.units.tenants.edit', 'Edit', array($property->id, $unit->id,$roja->id), array('class' => 'btn btn-xs btn-info pull-right')); ?>



             <?php echo Form::close(); ?></div>

    
  <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

  <?php else: ?>

<p><span class="glyphicon glyphicon-remove danger text-danger"></span> There is no tenant</p>
  <?php endif; ?>

                    <?php if($unit->owner): ?>
<?php $__currentLoopData = $property->owners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $landlord): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>

 <?php if($landlord->unit_id == $unit->id): ?>



<?php echo Form::open(['method' => 'DELETE',
                               'route' => ['properties.units.owners.destroy', $property->id, $unit->id,$landlord->id]]); ?>


                             <div class="owners"><span class="glyphicon glyphicon-sunglasses"> </span><a href="<?php echo e(route('properties.units.owners.show', [$property->id, $unit->id,$landlord->id])); ?>"><?php echo e(' ' .$landlord->name); ?></a>
                             

                             <?php echo Form::submit('Delete', array('class' => 'btn btn-xs btn-danger pull-right')); ?>

                        <?php echo link_to_route('properties.units.owners.edit', 'Edit', array($property->id, $unit->id,$landlord->id), array('class' => 'btn btn-xs btn-info pull-right')); ?>



             <?php echo Form::close(); ?></div>


 <?php endif; ?>


 <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                        <?php else: ?>
                        <p><span class="glyphicon glyphicon-remove danger text-danger"></span> There is no Owner</p>
                    <?php endif; ?>


</div>

                </div>
 

            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>


    <?php endif; ?>

<hr>



    <p>
        <?php echo link_to_route('properties.index', 'Back to Properties','', array('class' => 'btn btn-info')); ?> |
        <?php echo link_to_route('properties.edit', 'Edit Property', $property->id, array('class' => 'btn btn-primary')); ?> |
        <?php echo link_to_route('properties.units.create', 'Create Unit', array($property->id,$unit->id), array('class' => 'btn btn-success')); ?>

    </p>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>