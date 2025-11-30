

<?php $__env->startSection('title', 'Manage Certificates'); ?>

<?php $__env->startSection('content'); ?>
<div style="margin-bottom: 1.5rem;">
    <a href="<?php echo e(route('admin.certificates.create')); ?>" class="btn btn-primary">+ Tambah Certificate Baru</a>
</div>

<?php if(session('success')): ?>
<div style="background: #d4edda; color: #155724; padding: 1rem; border-radius: 8px; margin-bottom: 1.5rem;">
    <?php echo e(session('success')); ?>

</div>
<?php endif; ?>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Icon</th>
            <th>Foto</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $certificates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $certificate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <td><?php echo e($index + 1); ?></td>
            <td style="font-size: 2rem;"><?php echo e($certificate->icon); ?></td>
            <td>
                <?php if($certificate->image): ?>
                    <img src="<?php echo e(asset('images/' . $certificate->image)); ?>" alt="<?php echo e($certificate->title); ?>" style="width: 80px; height: 60px; object-fit: cover; border-radius: 8px; border: 1px solid #ddd;">
                <?php else: ?>
                    <span style="color: #999;">-</span>
                <?php endif; ?>
            </td>
            <td><?php echo e($certificate->title); ?></td>
            <td>
                <?php if($certificate->category == 'kepanitiaan'): ?>
                    <span style="background: #8B4049; color: white; padding: 4px 12px; border-radius: 20px; font-size: 0.85rem;">👥 Kepanitiaan</span>
                <?php elseif($certificate->category == 'lomba'): ?>
                    <span style="background: #D4A5A5; color: white; padding: 4px 12px; border-radius: 20px; font-size: 0.85rem;">🏆 Lomba</span>
                <?php elseif($certificate->category == 'penghargaan'): ?>
                    <span style="background: #E8B4B8; color: white; padding: 4px 12px; border-radius: 20px; font-size: 0.85rem;">🎓 Penghargaan</span>
                <?php else: ?>
                    <span style="background: #999; color: white; padding: 4px 12px; border-radius: 20px; font-size: 0.85rem;">-</span>
                <?php endif; ?>
            </td>
            <td><?php echo e($certificate->issuer); ?></td>
            <td><?php echo e($certificate->year); ?></td>
            <td>
                <a href="<?php echo e(route('admin.certificates.edit', $certificate)); ?>" class="btn btn-warning" style="margin-right: 0.5rem;">Edit</a>
                <form action="<?php echo e(route('admin.certificates.destroy', $certificate)); ?>" method="POST" style="display: inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin hapus certificate ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
            <td colspan="8" style="text-align: center; padding: 2rem; color: #999;">Belum ada data certificate</td>
        </tr>
        <?php endif; ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\portofolio\resources\views/admin/certificates/index.blade.php ENDPATH**/ ?>