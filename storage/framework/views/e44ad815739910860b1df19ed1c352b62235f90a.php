<?php $__env->startSection('title', 'Welcome to TenLord Dashboard'); ?>
<?php $__env->startSection('Sidebar', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>
<?php if(Auth::user()): ?>


<div class="row">
    <div class="col-sm-4">
        <div class="tile purple">
            <h3 class="title"><span class="glyphicon glyphicon-home"></span> <a href="<?php echo e(url('/properties')); ?>">Properties</a></h3>
            <p><?php echo e($property->count()); ?> properties listed </p>
            <p><?php echo e($unit->count()); ?> total units</p>

        </div>
    </div>
    <div class="col-sm-4">
        <div class="tile red">
            <h3 class="title"><span class="glyphicon glyphicon-bed"></span> Units</h3>
            <p><?php echo e($unit->count()); ?> units listed</p>
            <p><?php echo e($unit->count() - $tenant->count()); ?>  free units </p>

        </div>
    </div>
    <div class="col-sm-4">
        <div class="tile orange">
            <h3 class="title"><span class="glyphicon glyphicon-user"></span> Tenants</h3>
            <p><?php echo e($tenant->count()); ?> tenants allocated</p>
            <p>No applications.</p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <div class="tile green">
            <h3 class="title"><span class="glyphicon glyphicon-comment"></span> Notifications</h3>
            <p>No notification.</p>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="tile blue">
            <h3 class="title"><span class="glyphicon glyphicon-cog"></span> Service Providers</h3>
            <p>List is empty</p>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="tile purple">
            <h3 class="title"><span class="glyphicon glyphicon-pencil"></span> <a href="<?php echo e(url('/reports')); ?>">Reports</a></h3>
            <ul class="list-group">
                <li class="list-group-item"><a href="<?php echo e(url('/reports')); ?>">Property - Unit reports</a> </li>

            </ul>

        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-4">
        <div class="tile purple">
            <h3 class="title"><span class="glyphicon glyphicon-home"></span> <a href="<?php echo e(url('/owners')); ?>">Owners</a></h3>
            <p><?php echo e($owner->count()); ?> owners listed </p>

        </div>
    </div>
    <div class="col-sm-4">
        <div class="tile red">
            <h3 class="title"><span class="glyphicon glyphicon-bed"></span> Units</h3>
            <p><?php echo e($unit->count()); ?> units listed</p>
            <p><?php echo e($unit->count() - $tenant->count()); ?>  free units </p>

        </div>
    </div>
    <div class="col-sm-4">
        <div class="tile orange">
            <h3 class="title"><span class="glyphicon glyphicon-user"></span> Tenants</h3>
            <p><?php echo e($tenant->count()); ?> tenants allocated</p>
            <p>No applications.</p>
        </div>
    </div>
</div>




<?php else: ?>
    <h3 class="alert-danger"><span class="glyphicon glyphicon-lock"></span> You must login to view content</h3>

    <div class="page-header ">Overview: Convenience Communication features for tenants and landlords/property managers</div>
    <div class="alert-info">


        <p>Target: Apartment Rental buildings, Real Estate Management Companies. There are currently similar software but for larger/more sophisticated buildings. I am talking about smaller scale here.</p>


        <p> Use Cases:
        <ol>
            <li>Report Maintenance Issues</li>
            <li>Make Complaints/Safety Reminders</li>
            <li>Bill Pay and Rent Reminder</li>
            <li>Contracts, Lease Renewal, Lease Terms and Length</li>
            <li>Package Notifications</li>
            <li>Utilities</li>
            <li>Emergency Info.</li>
            <li>Bulletin Board</li>
            <li>Visual Laundry (optional and can be a separate app)</li>
        </ol>
        </p>
        <p>Revenue: Offer a freemium model with basic features for free. Add ons could be bill pay, cloud storage, laundry app, etc. Advertisement could come from local businesses and upgrade version. Could also allow local business to push deals/coupons within a certain geographic area</p></div>
    <div class="btn-group-lg">
        <a href="<?php echo e(url('/login')); ?>" class="btn btn-info ">Login</a>
        <a href="<?php echo e(url('/register')); ?>" class="btn btn-success">Register</a></div>
<?php endif; ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>