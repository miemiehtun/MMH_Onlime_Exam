<div class="container-fluid">
	<?php include('partials/header.php'); ?>
	<div class="row">
		<div class="col-md-9">
			<div class="card">
				<div class="card-body">
					<div class="card-title">
						<a href="#">hello</a>
						<span class="pull-right">hello</span>
					</div>
					<p class="card-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<ul class="list-unstyled">
						<li><a href="#">N</a></li>
						<li><a href="#">Ro</a></li>
						<li><a href="#">rn</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card">
				<div class="card-body">
				<h4 class="card-title">
					categories
				</h4>
					<ul class="list-unstyled">
						<?php include('config/conf.php');
						$result = "SELECT * FROM categories";
						$categories = mysqli_query($con,$result);
						
						while($row = mysqli_fetch_assoc($categories)):
						 ?>
						<li><a href="#"><?php echo $row['name']; ?></a></li>
					<?php endwhile; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>