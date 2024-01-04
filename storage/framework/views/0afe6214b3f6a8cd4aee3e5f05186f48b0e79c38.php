<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Register | Perpustakaan</title>
</head>
<body>
    <style>
        .register-block {
            background: #7386D5;
            float: left;
            width: 100%;
            padding: 50px 0;
        }

        .container {
            background: #fff;
            border-radius: 10px;
            box-shadow: 15px 20px 0px rgba(0, 0, 0, 0.1);
            max-width: 400px; 
            margin: auto; 
        }

        .register-sec {
            padding: 30px; 
            position: relative;
        }

        .register-sec h2 {
            margin-bottom: 20px; 
            font-weight: 800;
            font-size: 24px;
            color: #7386D5;
        }

        .register-sec h2:after {
            content: " ";
            width: 80px; 
            height: 5px;
            background: #FEB58A;
            display: block;
            margin-top: 20px;
            border-radius: 3px;
            margin-left: auto;
            margin-right: auto;
        }

        .form-group {
            margin-bottom: 15px; 
        }

        .btn-primary {
            width: 100%; 
        }

        .alert {
            margin: auto;
        }

    </style>

    <section class="register-block">
        <?php if($errors->any()): ?>
                <div class="alert alert-danger" style="width: 400px">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if(session('status')): ?>;
				<div class="alert alert-success" style="width: 400px">
					<?php echo e(session('message')); ?>

				</div>
			<?php endif; ?>
            <br>
        <div class="container">
            <br>
            <h2 class="text-center">Register Now!</h2>
            <form action="" method="POST" class="register-sec">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="phone">No Telepon</label>
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea type="text" name="alamat" id="alamat" class="form-control" required></textarea>
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
                <br>
                <div class="text-center">
                    <p>Sudah punya akun? <a href="login">Login!</a></p>
               </div>
            </form>
        </div>
    </section>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\projectUAS-app\resources\views/register.blade.php ENDPATH**/ ?>