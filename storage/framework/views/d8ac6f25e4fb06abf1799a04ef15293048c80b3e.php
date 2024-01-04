

<?php $__env->startSection('title', 'Pengguna'); ?>

<?php $__env->startSection('content'); ?>
<h2>Daftar Pengguna Perpustakaan</h2>
<p style="color:#fafafa; font-size:10px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam dolorem dicta qui tenetur pariatur ab esse possimus providentQuibusdam dolorem dicta qui tenetur pariatur ab esse possimus provident.</p>
<div>
    <a href="category-add" class="btn" style="background-color: #4e62bb; color:white;"><i class="bi bi-plus-lg"></i>Tambah</a>
</div>
<div class="my-4">
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>No.Telepon</th>
            <th>Alamat</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($item->username); ?></td>
            <td><?php echo e($item->phone); ?></td>
            <td><?php echo e($item->alamat); ?></td>
            <td><?php echo e($item->status); ?></td>
            <td>
                <a href="#" class="btn btn-primary">Ubah</a>
                <a href="#" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projectUAS-app\resources\views/user.blade.php ENDPATH**/ ?>