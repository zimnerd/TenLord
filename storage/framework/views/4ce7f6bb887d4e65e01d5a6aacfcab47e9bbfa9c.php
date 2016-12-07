<!-- /resources/views/tenants/create.blade.php -->

<?php $__env->startSection('title', 'Create Tenant For ' .$unit->name); ?>
<?php $__env->startSection('Sidebar', 'Tenants'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Create Tenant for "<?php echo e($property->name); ?>"</h2>

    <?php echo Form::model(new App\Tenant, ['route' => ['properties.tenants.store', $property->id], 'class'=>'']); ?>

    <?php echo $__env->make('tenants/partials/_form', ['submit_text' => 'Create Tenant'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>