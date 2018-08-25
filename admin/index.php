<div class="container-fluid">
	<?php
	 include("partials/header.php");
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<div class="row">
			<div class="col-md-6 mx-auto">
				<div class="card">
					<div class="card-body">
						<form action="login.php" method="post" class="form-horizontal">
							<div class="form-group row">
						    	<label for="user_name" class="col-sm-4 control-label">Username</label>
								<input type="text"  class="form-control" name="user_name" id="user_name">
							</div>
							<div class="form-group row">
								<label for="password" class="col-sm-4 control-label">Password</label>
								<input type="password"  class="form-control" name="password" id="password">
							</div>
								<button type="submit" class="btn btn-primary mb-2">Login</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
	</html>
</div>