<!-- /resources/views/tasks/create.blade.php -->

<?php $__env->startSection('Sidebar', 'Units'); ?>
<?php $__env->startSection('title', 'Create Units for ' .$property->name); ?>
<?php $__env->startSection('content'); ?>
    <h2>Create Unit for "<?php echo e($property->name); ?>"</h2>

    <?php echo Form::model(new App\Unit, ['route' => ['properties.units.store', $property->id], 'class'=>'']); ?>

    <?php echo $__env->make('units/partials/_form', ['submit_text' => 'Create Unit'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>