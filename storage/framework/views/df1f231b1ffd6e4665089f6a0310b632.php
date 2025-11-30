

<?php $__env->startSection('title', 'Manage Films'); ?>

<?php $__env->startSection('content'); ?>
<div style="margin-bottom: 1.5rem;">
    <a href="<?php echo e(route('admin.films.create')); ?>" class="btn btn-primary">+ Tambah Film Baru</a>
</div>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Film</th>
            <th>Tahun</th>
            <th>Genre</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $films; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $film): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <td><?php echo e($index + 1); ?></td>
            <td><?php echo e($film->title); ?></td>
            <td><?php echo e($film->year); ?></td>
            <td><?php echo e($film->genre); ?></td>
            <td>
                <a href="<?php echo e(route('admin.films.edit', $film)); ?>" class="btn btn-warning" style="margin-right: 0.5rem;">Edit</a>
                <form action="<?php echo e(route('admin.films.destroy', $film)); ?>" method="POST" style="display: inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin hapus film ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
            <td colspan="5" style="text-align: center; padding: 2rem; color: #999;">Belum ada data film</td>
        </tr>
        <?php endif; ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\portofolio\resources\views/admin/films/index.blade.php ENDPATH**/ ?>