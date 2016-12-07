<!-- /resources/views/tenants/edit.blade.php -->

<?php $__env->startSection('title', 'Edit ' .$tenant->name); ?>
<?php $__env->startSection('Sidebar', 'Tenants'); ?>

<?php $__env->startSection('content'); ?>

    <?php echo Form::model($tenant, ['method' => 'PATCH', 'route' => ['properties.units.tenants.update', $property->id, $unit->id, $tenant->id]]); ?>

    <?php echo $__env->make('tenants/partials/_form', ['submit_text' => 'Edit Tenant'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>