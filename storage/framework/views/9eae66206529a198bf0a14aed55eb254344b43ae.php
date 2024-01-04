

<?php $__env->startSection('title', ' Edit Kategori'); ?>

<?php $__env->startSection('content'); ?>
<h4 class="text-h4">Edit Kategori Buku</h4>
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
        <div class="container">
            <form action="/category-edit/<?php echo e($category->slug); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                <div class="form-group">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" id="name" class="form-control"  value="<?php echo e($category->name); ?>" placeholder="nama kategori buku">
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projectUAS-app\resources\views/category-edit.blade.php ENDPATH**/ ?>