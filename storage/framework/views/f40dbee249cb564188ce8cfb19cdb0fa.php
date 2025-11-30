

<?php $__env->startSection('content'); ?>
<div class="container-fluid px-4">
    <div class="my-4">
        <h1 class="h3 mb-0">Add New Item for: <?php echo e($hobby->name); ?> <?php echo e($hobby->icon); ?></h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.hobbies.index')); ?>">Hobbies</a></li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.hobby-items.index', $hobby)); ?>">Items</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </nav>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="<?php echo e(route('admin.hobby-items.store', $hobby)); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <div class="mb-3">
                    <label for="title" class="form-label">Item Title *</label>
                    <input type="text" 
                           class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                           id="title" 
                           name="title" 
                           value="<?php echo e(old('title')); ?>" 
                           required
                           placeholder="e.g. Inception, Nasi Goreng Special">
                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                              id="content" 
                              name="content" 
                              rows="4"
                              placeholder="Description, review, or recipe"><?php echo e(old('content')); ?></textarea>
                    <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="mb-3">
                    <label for="metadata" class="form-label">Metadata (JSON Format)</label>
                    <textarea class="form-control <?php $__errorArgs = ['metadata'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> font-monospace" 
                              id="metadata" 
                              name="metadata" 
                              rows="5"
                              placeholder='{"year": 2010, "genre": "Sci-Fi", "rating": 9.5}'><?php echo e(old('metadata')); ?></textarea>
                    <?php $__errorArgs = ['metadata'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <small class="text-muted">
                        <strong>Examples by type:</strong><br>
                        <strong>Film:</strong> {"year": 2010, "genre": "Sci-Fi", "rating": 9.5}<br>
                        <strong>Recipe:</strong> {"difficulty": "Easy", "time": "30 min", "servings": 4}<br>
                        <strong>Gallery:</strong> {"image_url": "https://...", "camera": "Canon EOS"}<br>
                        Leave empty if not needed.
                    </small>
                </div>

                <div class="alert alert-info">
                    <strong>Current Hobby Type:</strong> <span class="badge bg-primary"><?php echo e($hobby->type); ?></span><br>
                    <small>Make sure your metadata matches the hobby type!</small>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Save Item
                    </button>
                    <a href="<?php echo e(route('admin.hobby-items.index', $hobby)); ?>" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\portofolio\resources\views/admin/hobby-items/create.blade.php ENDPATH**/ ?>