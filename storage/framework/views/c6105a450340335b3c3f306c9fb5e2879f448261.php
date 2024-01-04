

<?php $__env->startSection('title', ' Tambah Buku'); ?>

<?php $__env->startSection('content'); ?>
<h4 class="text-h4">Tambah Buku</h4>
<p style="color:#fafafa; font-size:10px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam dolorem dicta qui tenetur pariatur ab esse possimus providentQuibusdam dolorem dicta qui tenetur pariatur ab esse possimus provident.</p>
    <div class="w-50">

        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <li><?php echo e($error); ?></li> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

        <div class="container ">
            <form action="book-add" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="book_code" class="form-label">Kode Buku</label>
                    <input type="text" name="book_code" id="book_code" class="form-control" placeholder="masukan kode buku">
                </div>
                <br>
                <div class="form-group">
                    <label for="title" class="form-label">Judul Buku</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="masukan judul buku">
                </div>
                <br>
                <div class="form-group">
                    <label for="cover" class="form-label">Cover</label>
                    <input type="file" name="cover" id="cover" class="form-control" placeholder="masukan cover buku">
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projectUAS-app\resources\views/book-add.blade.php ENDPATH**/ ?>