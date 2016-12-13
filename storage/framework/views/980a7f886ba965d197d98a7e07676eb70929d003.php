<?php $__env->startSection('title', 'Your profile'); ?>
<?php $__env->startSection('Sidebar', 'Your quick links'); ?>
<?php $__env->startSection('content'); ?>
                <img src="/images/avatars/<?php echo e($user->avatar); ?>" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                <h2><?php echo e($user->name); ?>'s Profile</h2>
                <form enctype="multipart/form-data" action="/profile" method="POST">
                    <label>Update Profile Image</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>