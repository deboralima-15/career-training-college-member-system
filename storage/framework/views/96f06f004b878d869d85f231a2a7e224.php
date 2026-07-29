

<?php $__env->startSection('content'); ?>

<div class="card">

    <div style="display:flex; justify-content:space-between; align-items:center;">

        <div>
            <h1>Members List</h1>
            <p style="margin-top:10px;">
                View all registered members in the system.
            </p>
        </div>

        <a href="/members/create" class="btn btn-primary">
            + Add Member
        </a>

    </div>

    <?php if(session('success')): ?>
        <div style="
            margin-top:20px;
            background:#d4edda;
            color:#155724;
            padding:15px;
            border-radius:8px;
        ">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <table>

        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Professional Summary</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>

            <?php $__empty_1 = true; $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                <tr>
                    <td><?php echo e($member->id); ?></td>
                    <td><?php echo e($member->first_name); ?></td>
                    <td><?php echo e($member->last_name); ?></td>
                    <td><?php echo e($member->age); ?></td>
                    <td><?php echo e($member->email); ?></td>
                    <td><?php echo e($member->phone); ?></td>
                    <td><?php echo e($member->address); ?></td>
                    <td><?php echo e($member->professional_summary); ?></td>

                    <td>
                        <div style="display:flex; gap:10px; justify-content:center; align-items:center;">

                            <a href="/members/<?php echo e($member->id); ?>" class="btn btn-primary">
                                View
                            </a>

                            <a href="/members/<?php echo e($member->id); ?>/edit" class="btn btn-warning">
                                Edit
                            </a>

                            <form action="/members/<?php echo e($member->id); ?>" method="POST" style="margin:0;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>

                                <button type="submit" class="btn btn-danger">
                                    Delete
                                </button>
                            </form>

                        </div>
                    </td>
                </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <tr>
                    <td colspan="9">
                        No members found.
                    </td>
                </tr>

            <?php endif; ?>

        </tbody>

    </table>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ctc-event-team\resources\views/members/index.blade.php ENDPATH**/ ?>