

<?php $__env->startSection('content'); ?>
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center my-4">
        <h1 class="h3 mb-0">Manage Hobbies</h1>
        <a href="<?php echo e(route('admin.hobbies.create')); ?>" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add New Hobby
        </a>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(session('success')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="5%">Icon</th>
                            <th width="20%">Name</th>
                            <th width="35%">Description</th>
                            <th width="10%">Type</th>
                            <th width="10%">Items</th>
                            <th width="15%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $hobbies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hobby): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td class="fs-4"><?php echo e($hobby->icon); ?></td>
                            <td><?php echo e($hobby->name); ?></td>
                            <td><?php echo e(Str::limit($hobby->description, 60)); ?></td>
                            <td>
                                <span class="badge bg-info"><?php echo e($hobby->type); ?></span>
                            </td>
                            <td>
                                <a href="<?php echo e(route('admin.hobby-items.index', $hobby)); ?>" class="badge bg-secondary text-decoration-none">
                                    <?php echo e($hobby->items_count); ?> items
                                </a>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="<?php echo e(route('admin.hobby-items.index', $hobby)); ?>" 
                                       class="btn btn-sm btn-info" title="Manage Items">
                                        <i class="fas fa-list"></i>
                                    </a>
                                    <a href="<?php echo e(route('admin.hobbies.edit', $hobby)); ?>" 
                                       class="btn btn-sm btn-warning" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="<?php echo e(route('admin.hobbies.destroy', $hobby)); ?>" 
                                          method="POST" 
                                          onsubmit="return confirm('Delete this hobby?')">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="7" class="text-center py-4 text-muted">
                                No hobbies found. <a href="<?php echo e(route('admin.hobbies.create')); ?>">Add one now</a>
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\portofolio\resources\views/admin/hobbies/index.blade.php ENDPATH**/ ?>