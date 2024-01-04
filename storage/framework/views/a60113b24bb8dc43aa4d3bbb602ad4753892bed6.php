

<?php $__env->startSection('title', 'Log Peminjaman'); ?>

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
            <th>Pengguna</th>
            <th>Judul Buku</th>
            <th>Tanggal Sewa</th>
            <th>Tanggal Harus Kembali</th>
            <th>Tanggal Kembali</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $rentlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($item->username); ?></td>
            <td><?php echo e($item->title); ?></td>
            <td><?php echo e($item->rent_date); ?></td>
            <td><?php echo e($item->return_date); ?></td>
            <td><?php echo e($item->actual_return_date); ?></td>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projectUAS-app\resources\views/rentlog.blade.php ENDPATH**/ ?>