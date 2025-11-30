

<?php $__env->startSection('title', 'Manage Skills'); ?>

<?php $__env->startSection('content'); ?>
<div style="margin-bottom: 1.5rem;">
    <a href="<?php echo e(route('admin.skills.create')); ?>" class="btn btn-primary">+ Tambah Skill Baru</a>
</div>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Icon</th>
            <th>Nama Skill</th>
            <th>Persentase</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <td><?php echo e($index + 1); ?></td>
            <td style="font-size: 2rem;"><?php echo e($skill->icon); ?></td>
            <td><?php echo e($skill->name); ?></td>
            <td><?php echo e($skill->percentage); ?>%</td>
            <td>
                <a href="<?php echo e(route('admin.skills.edit', $skill)); ?>" class="btn btn-warning" style="margin-right: 0.5rem;">Edit</a>
                <form action="<?php echo e(route('admin.skills.destroy', $skill)); ?>" method="POST" style="display: inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin hapus skill ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
            <td colspan="5" style="text-align: center; padding: 2rem; color: #999;">Belum ada data skill</td>
        </tr>
        <?php endif; ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\portofolio\resources\views/admin/skills/index.blade.php ENDPATH**/ ?>