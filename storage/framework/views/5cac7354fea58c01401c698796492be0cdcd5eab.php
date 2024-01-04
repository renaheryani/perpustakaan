
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center mb-4">
        <h1 class="h3 mb-0 font-weight-bold">Peminjaman Buku</h1>
        <i class="fas fa-users fa-2x pl-3"></i>
    </div>
    <table class="table table-bordered table-striped text-center">
        <thead class="table-dark">
            <tr>
                <th>NO</th>
                <th>KODE</th>
                <th>Nama</th>
                <th>Judul Buku</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th colspan="2">Status</th>
                <th><i class="fas fa-gear"></i></th>
            </tr>
            <td>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $daftars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($post->id); ?></td>
                        <td><?php echo e($post->kode); ?></td>
                        <td><?php echo e($post->judul); ?></td>
                        <td><?php echo e($post->alamat); ?></td>
                        <td><?php echo e($post->telepon); ?></td>
                        <td><?php echo e($post->tgl_pinjam); ?></td>
                        <td><?php echo e($post->tgl_kembali); ?></td>
                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST">
                                <a href="" class="btn btn-sm btn-dark"><i class="fa fa-eye"></i></a>
                                <a href="" class="btn btn-sm btn-primary"><i class="fa fa-pencil-alt"></i></a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <a href="" class="btn btn-md btn-success mb-3">edit</a>
                                <a href="" class="btn btn-md btn-success mb-3">delete</a>
                            </form>
                        </td>
                    </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                      <div class="alert alert-danger">
                          Data Post belum Tersedia.
                      </div>
                  <?php endif; ?>
                </tbody>
            </td>
        </thead><?php /**PATH C:\xampp\htdocs\projectUAS-app\resources\views/peminjaman.blade.php ENDPATH**/ ?>