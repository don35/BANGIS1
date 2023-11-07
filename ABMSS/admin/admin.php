<?php include '../include/links.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<title>Admin</title>
</head>
<body>

	<?php include 'sidebar.php';?>
	<?php include 'navbar.php';?>
	<link rel="stylesheet" href="../css/admin.css">
		<!-- MAIN -->
		<main>
			<h1 class="title">Dashboard</h1>
			<ul class="breadcrumbs">
				<li><a href="#">Home</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Dashboard</a></li>
			</ul>
			<div class="info-data">
				<div class="card">
					<div class="head">
						<div>
							<h2>25</h2>
							<p>Total Accounts</p>
						</div>
					</div>
					<span class="progress" data-value="40%"></span>
					<span class="label">40%</span>
				</div>
				
				
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- NAVBAR -->
</body>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="../js/index.js"></script>
</html>



