

<?php $__env->startSection('title', ' Hapus Kategori'); ?>

<?php $__env->startSection('content'); ?>
<div class="hapus justify-content-center text-center border p-4">
    <h4>Apakah anda yakin akan menghapus data kategori?</h4>
    <p style="color: #fafafa; font-size: 10px;">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam dolorem dicta qui tenetur pariatur ab esse possimus providentQuibusdam dolorem dicta qui tenetur pariatur ab esse possimus provident.
    </p>
    <div class="w-100 d-flex justify-content-center mt-3">
        <a href="/category-destroy/<?php echo e($category->slug); ?>" class="btn btn-danger me-5">Hapus</a>
        <a href="/categories" class="btn btn-primary me-5">Batal</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projectUAS-app\resources\views/category-delete.blade.php ENDPATH**/ ?>