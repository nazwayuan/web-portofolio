

<?php $__env->startSection('title', 'Manage Projects'); ?>

<?php $__env->startSection('content'); ?>
<div style="margin-bottom: 1.5rem;">
    <a href="<?php echo e(route('admin.projects.create')); ?>" class="btn btn-primary">+ Tambah Project Baru</a>
</div>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Teknologi</th>
            <th>Tahun</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <td><?php echo e($index + 1); ?></td>
            <td><?php echo e($project->title); ?></td>
            <td><?php echo e($project->technologies); ?></td>
            <td><?php echo e($project->year); ?></td>
            <td>
                <a href="<?php echo e(route('admin.projects.edit', $project)); ?>" class="btn btn-warning" style="margin-right: 0.5rem;">Edit</a>
                <form action="<?php echo e(route('admin.projects.destroy', $project)); ?>" method="POST" style="display: inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin hapus project ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
            <td colspan="5" style="text-align: center; padding: 2rem; color: #999;">Belum ada data project</td>
        </tr>
        <?php endif; ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\portofolio\resources\views/admin/projects/index.blade.php ENDPATH**/ ?>