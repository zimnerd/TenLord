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
                <div class="page-header">
  <h3></h3>
</div>
  
  
  
<div id="exTab2" class="row">	
<ul class="nav nav-tabs">
			<li class="active">
        <a  href="#profile" data-toggle="tab">Profile Details</a>
			</li>
			<li><a href="#messages" data-toggle="tab">Messages <span class="badge"><?php echo e(Auth::user()->unreadNotifications->count()); ?></span></a>
			</li>
			<li><a href="#reports" data-toggle="tab">Reports</a>
			</li>
		</ul>

			<div class="tab-content ">
			  <div class="tab-pane active" id="profile">
          <h3>Standard tab panel created on bootstrap using nav-tabs</h3>
				</div>
				<div class="tab-pane" id="messages">
				<table class="table table-hover">
				
         <?php $__currentLoopData = $user->notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
         <tr><td>
         <?php if($notification->type == 'App\\Notifications\\tenantAdded'): ?>
   <a href=" <?php echo e($notification->data['url']); ?>"><?php echo e('New Tenant Added ' . $notification->data['tenant_id']); ?></a>
  <?php $notification->markAsRead();?>
   
   <?php endif; ?>
   
   
   </td><td>
   <?php if($notification->read_at == NULL): ?>
   <strong><?php echo e('New'); ?></strong>
   <?php else: ?>
   <?php echo e('Opened'); ?>

   <?php endif; ?>
   </td>
   </tr>
 
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
</table>
   
 
				</div>
        <div class="tab-pane" id="reports">
        No reports
          
				</div>
			</div>
  </div>
                      
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>