

<?php $__env->startSection('content'); ?>
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center my-4">
        <div>
            <h1 class="h3 mb-0">Manage Items for: <?php echo e($hobby->name); ?> <?php echo e($hobby->icon); ?></h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('admin.hobbies.index')); ?>">Hobbies</a></li>
                    <li class="breadcrumb-item active">Items</li>
                </ol>
            </nav>
        </div>
        <a href="<?php echo e(route('admin.hobby-items.create', $hobby)); ?>" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add New Item
        </a>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(session('success')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <div class="card shadow-sm mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <h5 class="card-title">Hobby Details</h5>
                    <p class="mb-1"><strong>Type:</strong> <span class="badge bg-info"><?php echo e($hobby->type); ?></span></p>
                    <p class="mb-0"><strong>Description:</strong> <?php echo e($hobby->description); ?></p>
                </div>
                <div class="col-md-4 text-end">
                    <a href="<?php echo e(route('admin.hobbies.edit', $hobby)); ?>" class="btn btn-sm btn-warning">
                        <i class="fas fa-edit"></i> Edit Hobby
                    </a>
                    <a href="<?php echo e(route('admin.hobbies.index')); ?>" class="btn btn-sm btn-secondary">
                        <i class="fas fa-arrow-left"></i> Back to Hobbies
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="5%">#</th>
                            <th width="25%">Title</th>
                            <th width="35%">Content</th>
                            <th width="20%">Metadata</th>
                            <th width="15%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($item->title); ?></td>
                            <td><?php echo e(Str::limit($item->content, 60)); ?></td>
                            <td>
                                <?php if($item->metadata): ?>
                                    <small class="text-muted">
                                        <?php $__currentLoopData = $item->metadata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <span class="badge bg-secondary"><?php echo e($key); ?>: <?php echo e($value); ?></span>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </small>
                                <?php else: ?>
                                    <span class="text-muted">-</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="<?php echo e(route('admin.hobby-items.edit', [$hobby, $item])); ?>" 
                                       class="btn btn-sm btn-warning" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="<?php echo e(route('admin.hobby-items.destroy', [$hobby, $item])); ?>" 
                                          method="POST" 
                                          onsubmit="return confirm('Delete this item?')">
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
                            <td colspan="5" class="text-center py-4 text-muted">
                                No items found. <a href="<?php echo e(route('admin.hobby-items.create', $hobby)); ?>">Add one now</a>
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
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\portofolio\resources\views/admin/hobby-items/index.blade.php ENDPATH**/ ?>