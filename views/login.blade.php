<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Perpustakaan</title>
</head>
<body>
    <style>

.login-block {
	background: #7386D5;
	float: left;
	width: 100%;
	padding: 50px 0;
}

.banner-sec {
	background: url(https://static.pexels.com/photos/33972/pexels-photo.jpg) no-repeat left bottom;
	background-size: cover;
	min-height: 500px;
	border-radius: 0 10px 10px 0;
	padding: 0;
}

.container {
	background: #fff;
	border-radius: 10px;
	box-shadow: 15px 20px 0px rgba(0, 0, 0, 0.1);
}

.carousel-inner {
	border-radius: 0 10px 10px 0;
}

.carousel-caption {
	text-align: left;
	left: 5%;
}

.login-sec {
	padding: 50px 30px;
	position: relative;
}

.login-sec .copy-text {
	position: absolute;
	width: 80%;
	bottom: 20px;
	font-size: 13px;
	text-align: center;
}

.login-sec h2 {
	margin-bottom: 30px;
	font-weight: 800;
	font-size: 30px;
	color: #7386D5;
}

.login-sec h2:after {
	content: " ";
	width: 100px;
	height: 5px;
	background: #FEB58A;
	display: block;
	margin-top: 20px;
	border-radius: 3px;
	margin-left: auto;
	margin-right: auto
}
    </style>
    <section class="login-block">
        <div class="container d-flex flex-column">
        	<div class="row">
            	<div class="col-md-4 login-sec">
					@if (session('status'));
					<div class="alert alert-danger">
						{{ session('message') }}
					</div>
					@endif
                <h2 class="text-center">Login Now!</h2>
                <form action="" method="POST" class="login-form">
					@csrf
      			<div class="form-group">
        			<label for="exampleInputEmail1">Username</label>
        			<input type="text" name="username" id="username" class="form-control" required>
				</div>
      			<div class="form-group">
        			<label for="exampleInputPassword1">Password</label>
        			<input type="password" name="password" id="password" class="form-control" required>
      			</div>
      		<br>
        	<div>
            	<button type="submit" class="btn btn-primary form-control">Login</button>
        	</div>
			<br>
			<div class="text-center">
				<p>Belum daftar? <a href="register">Register!</a></p>
		   </div>
      	</form>
    <div class="copy-text">Created by<i class="fa fa-heart"></i> pemweb</a></div>
    </div>
        <div class="col-md-8 banner-sec">
                </div>	   
                
            </div>
        </div>
    </div>
    </section>
</body>
</html>