

<?php $__env->startSection('content'); ?>

<div class="card">

    <h1>Add New Member</h1>

    <p style="margin-top:10px; margin-bottom:30px;">
        Fill in the form below to register a new member.
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

    <form action="/members" method="POST">

        <?php echo csrf_field(); ?>

        <label>First Name</label>
        <input type="text" name="first_name">

        <label>Last Name</label>
        <input type="text" name="last_name">

        <label>Age</label>
        <input type="number" name="age">

        <label>Email</label>
        <input type="email" name="email">

        <label>Phone</label>
        <input type="text" name="phone">

        <label>Address</label>
        <input type="text" name="address">

        <label>Professional Summary</label>
        <textarea name="professional_summary" rows="5"></textarea>

        <button type="submit" class="btn btn-primary">
            Save Member
        </button>

    </form>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ctc-event-team\resources\views/members/create.blade.php ENDPATH**/ ?>