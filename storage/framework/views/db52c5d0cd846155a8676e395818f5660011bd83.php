

<?php $__env->startSection('title', 'Kategori'); ?>

<?php $__env->startSection('content'); ?>
<h2>Daftar Kategori</h2>
<p style="color:#fafafa; font-size:10px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam dolorem dicta qui tenetur pariatur ab esse possimus providentQuibusdam dolorem dicta qui tenetur pariatur ab esse possimus provident.</p>
<div>
    <a href="category-add" class="btn me-2" style="background-color: #4e62bb; color:white;"><i class="bi bi-plus-lg"></i>Tambah</a>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        <?php if(session('status')): ?>
            Swal.fire({
                icon: 'success',
                text: '<?php echo e(session('status')); ?>',
                showCloseButton: true,
            });
        <?php endif; ?>
    });
</script>
<div class="my-4">
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($item->name); ?></td>
            <td>
                <a href="category-edit/<?php echo e($item->slug); ?>" class="btn btn-primary">Ubah</a>
                <a href="category-delete/<?php echo e($item->slug); ?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projectUAS-app\resources\views/category.blade.php ENDPATH**/ ?>