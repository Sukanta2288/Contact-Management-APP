

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Contact Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?php echo e($contact->name); ?></h5>
            <p class="card-text"><strong>Email:</strong> <?php echo e($contact->email); ?></p>
            <p class="card-text"><strong>Phone:</strong> <?php echo e($contact->phone ?? 'N/A'); ?></p>
            <p class="card-text"><strong>Address:</strong> <?php echo e($contact->address ?? 'N/A'); ?></p>

            <a href="<?php echo e(route('contacts.edit', $contact->id)); ?>" class="btn btn-primary">Edit</a>
            <form action="<?php echo e(route('contacts.destroy', $contact->id)); ?>" method="POST" style="display:inline-block;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this contact?')">Delete</button>
            </form>
            <a href="<?php echo e(route('contacts.index')); ?>" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OstadLaravelAssignment\contact-manager\resources\views/contacts/show.blade.php ENDPATH**/ ?>