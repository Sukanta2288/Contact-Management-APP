

<?php $__env->startSection('content'); ?>
<div class="container fade-in">
    <h1>Contacts</h1>

    <div class="row mb-4">
        <div class="col-md-6">
            <form action="<?php echo e(route('contacts.index')); ?>" method="GET" class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search by name or email" value="<?php echo e(request('search')); ?>">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-outline-primary">Search</button>
                </div>
            </form>
        </div>
        <!-- <div class="col-md-6 text-right">
            <a href="<?php echo e(route('contacts.create')); ?>" class="btn btn-primary btn-lg">Add New Contact</a>
        </div> -->
    </div>

    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>
                    <a href="<?php echo e(route('contacts.index', ['sort' => 'name', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc'])); ?>">
                        Name
                        <?php if(request('sort') === 'name'): ?>
                            <i class="fas fa-sort-<?php echo e(request('direction') === 'asc' ? 'up' : 'down'); ?>"></i>
                        <?php endif; ?>
                    </a>
                </th>
                <th>
                    <a href="<?php echo e(route('contacts.index', ['sort' => 'created_at', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc'])); ?>">
                        Created At
                        <?php if(request('sort') === 'created_at'): ?>
                            <i class="fas fa-sort-<?php echo e(request('direction') === 'asc' ? 'up' : 'down'); ?>"></i>
                        <?php endif; ?>
                    </a>
                </th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($contact->name); ?></td>
                <td><?php echo e($contact->created_at->format('Y-m-d H:i')); ?></td>
                <td class="text-center">
                    <a href="<?php echo e(route('contacts.show', $contact->id)); ?>" class="btn btn-info btn-sm">View</a>
                    <a href="<?php echo e(route('contacts.edit', $contact->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <form action="<?php echo e(route('contacts.destroy', $contact->id)); ?>" method="POST" class="d-inline-block delete-form">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this contact?')">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="3" class="text-center">No contacts found.</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        <?php echo e($contacts->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OstadLaravelAssignment\contact-manager\resources\views/contacts/index.blade.php ENDPATH**/ ?>