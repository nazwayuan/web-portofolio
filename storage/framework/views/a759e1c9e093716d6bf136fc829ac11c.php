

<?php $__env->startSection('title', 'Tambah Skill Baru'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <form action="<?php echo e(route('admin.skills.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        
        <div class="form-group">
            <label>Nama Skill *</label>
            <input type="text" name="name" required value="<?php echo e(old('name')); ?>" placeholder="Contoh: HTML5">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small style="color: red;"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="form-group">
            <label>Icon (Emoji)</label>
            <input type="text" name="icon" value="<?php echo e(old('icon')); ?>" placeholder="Contoh: 💻" maxlength="10">
            <small style="color: #999;">Copy emoji dari: <a href="https://emojipedia.org" target="_blank">emojipedia.org</a></small>
            <?php $__errorArgs = ['icon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small style="color: red;"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="form-group">
            <label>Persentase (0-100) *</label>
            <input type="number" name="percentage" required value="<?php echo e(old('percentage')); ?>" min="0" max="100" placeholder="Contoh: 85">
            <?php $__errorArgs = ['percentage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small style="color: red;"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="form-group">
            <label>Kategori *</label>
            <select name="category" required style="width: 100%; padding: 0.8rem; border: 2px solid #e0e0e0; border-radius: 8px; font-family: 'Poppins', sans-serif; font-size: 1rem;">
                <option value="">-- Pilih Kategori --</option>
                <option value="hard" <?php echo e(old('category') == 'hard' ? 'selected' : ''); ?>>Hard Skill</option>
                <option value="soft" <?php echo e(old('category') == 'soft' ? 'selected' : ''); ?>>Soft Skill</option>
            </select>
            <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small style="color: red;"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div style="margin-top: 2rem;">
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="<?php echo e(route('admin.skills.index')); ?>" class="btn btn-danger">Batal</a>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\portofolio\resources\views/admin/skills/create.blade.php ENDPATH**/ ?>