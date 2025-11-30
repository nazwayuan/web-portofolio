

<?php $__env->startSection('title', 'Edit Certificate'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <form action="<?php echo e(route('admin.certificates.update', $certificate)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        
        <div class="form-group">
            <label>Judul Certificate *</label>
            <input type="text" name="title" required value="<?php echo e(old('title', $certificate->title)); ?>" placeholder="Contoh: Web Development Certificate">
            <?php $__errorArgs = ['title'];
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
            <select name="category" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; font-size: 1rem;">
                <option value="">-- Pilih Kategori --</option>
                <option value="kepanitiaan" <?php echo e(old('category', $certificate->category) == 'kepanitiaan' ? 'selected' : ''); ?>>👥 Kepanitiaan</option>
                <option value="lomba" <?php echo e(old('category', $certificate->category) == 'lomba' ? 'selected' : ''); ?>>🏆 Lomba</option>
                <option value="penghargaan" <?php echo e(old('category', $certificate->category) == 'penghargaan' ? 'selected' : ''); ?>>🎓 Penghargaan & Seminar</option>
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

        <div class="form-group">
            <label>Penerbit *</label>
            <input type="text" name="issuer" required value="<?php echo e(old('issuer', $certificate->issuer)); ?>" placeholder="Contoh: Dicoding Indonesia">
            <?php $__errorArgs = ['issuer'];
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
            <label>Tahun *</label>
            <input type="number" name="year" required value="<?php echo e(old('year', $certificate->year)); ?>" placeholder="2024" min="2000" max="2100">
            <?php $__errorArgs = ['year'];
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
            <label>Deskripsi (Opsional)</label>
            <textarea name="description" rows="4" placeholder="Deskripsi singkat tentang certificate..."><?php echo e(old('description', $certificate->description)); ?></textarea>
            <?php $__errorArgs = ['description'];
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
            <input type="text" name="icon" value="<?php echo e(old('icon', $certificate->icon)); ?>" placeholder="Contoh: 🏅" maxlength="10">
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
            <label>Foto Sertifikat</label>
            
            <?php if($certificate->image): ?>
                <div style="margin-bottom: 10px;">
                    <img src="<?php echo e(asset('images/' . $certificate->image)); ?>" alt="Current Certificate" style="max-width: 300px; border-radius: 8px; border: 2px solid #ddd;">
                    <p style="color: #999; font-size: 0.9rem; margin-top: 5px;">Foto saat ini</p>
                </div>
            <?php endif; ?>
            
            <input type="file" name="image" accept="image/*" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px;">
            <small style="color: #999;">Format: JPG, PNG, GIF (Max 2MB) - Biarkan kosong jika tidak ingin mengubah</small>
            <?php $__errorArgs = ['image'];
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
            <button type="submit" class="btn btn-success">Update</button>
            <a href="<?php echo e(route('admin.certificates.index')); ?>" class="btn btn-danger">Batal</a>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\portofolio\resources\views/admin/certificates/edit.blade.php ENDPATH**/ ?>