

<?php $__env->startSection('content'); ?>

<div class="card">

    <h1>Edit Member</h1>
    <p style="margin-top:10px; margin-bottom:30px;">
        Update the member information below.
    </p>

    <?php if($errors->any()): ?>
        <div style="
            background:#f8d7da;
            color:#721c24;
            padding:15px;
            border-radius:8px;
            margin-bottom:20px;
        ">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="/members/<?php echo e($member->id); ?>" method="POST">

        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <label>First Name</label>
        <input type="text" name="first_name" value="<?php echo e($member->first_name); ?>">

        <label>Last Name</label>
        <input type="text" name="last_name" value="<?php echo e($member->last_name); ?>">

        <label>Age</label>
        <input type="number" name="age" value="<?php echo e($member->age); ?>">

        <label>Email</label>
        <input type="email" name="email" value="<?php echo e($member->email); ?>">

        <label>Phone</label>
        <input type="text" name="phone" value="<?php echo e($member->phone); ?>">

        <label>Address</label>
        <input type="text" name="address" value="<?php echo e($member->address); ?>">

        <label>Professional Summary</label>
        <textarea name="professional_summary" rows="5"><?php echo e($member->professional_summary); ?></textarea>

        <button type="submit" class="btn btn-primary">
            Update Member
        </button>

        <a href="/" class="btn btn-warning">
            Cancel
        </a>

    </form>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ctc-event-team\resources\views/members/edit.blade.php ENDPATH**/ ?>