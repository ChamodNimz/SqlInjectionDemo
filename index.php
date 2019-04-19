<!DOCTYPE html>
<html>
<head>
	<title>Sql Injection</title>
	<!--Made with love by Mutiullah Samim -->

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- 	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div>
  <img src="content/img/login-header.jpg" style="width: 100%;" >
</div>

	<div class="container p-5">
		<div class="d-flex justify-content-center h-100">
			<div class="card text-light p-4" style="margin-top: 70px;">
				<?php 
				if(isset($_GET['error'])):
				 ?>
				<div class="alert alert-danger" role="alert"> loggin failed ...! </div>

			<?php endif; ?>

			<div class="alert alert-danger" id="frontAlert" role="alert">some  error ... !</div>
				<div class="card-header">
					<h3>Sign In</h3>
				</div>
				<div class="card-body">
					<form action="script.php" method="POST" onsubmit="return  beforeSubmit();">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" class="form-control" name="username" id="username" placeholder="username">
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" id="password" class="form-control" placeholder="password">
						</div>

						<div class="form-group">
							<input type="submit" value="Login" class="btn float-right login_btn">
						</div>
					</form>
				</div>
				<div class="card-footer">
					Powered by @SnowFlake AKA Chamod 
					<br>
					<small>subscribe <b>Art Of Coding</b></small>
				</div>
			</div>
		</div>
	</div>

<div>
  <img src="content/img/login-footer.jpg" style="width: 100%; margin-top: -140px;" >
</div>

	<script type="text/javascript" src="main.js"></script>
</body>
</html>