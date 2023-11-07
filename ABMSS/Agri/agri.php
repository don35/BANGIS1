<?php include '../include/links.php'?>
<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION["userid"]) || !isset($_SESSION["username"])) {
    header("Location: ../index.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="../css/agri.css">
	<title>Agricultural Sectors</title>
</head>
<body>
	
	<?php include 'navbar.php'; ?>
	<?php include 'sidebar.php'; ?>
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
							<p>Confirm Rabies Animal Cases</p>
						</div>
					</div>
					<span class="progress" data-value="40%"></span>
					<span class="label">69%</span>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>33</h2>
							<p>Vaccinated Dogs and Cats</p>
						</div>
					</div>
					<span class="progress" data-value="60%"></span>
					<span class="label">20%</span>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>17</h2>
							<p>Submitted Animal Rabies Samples</p>
						</div>
					</div>
					<span class="progress" data-value="30%"></span>
					<span class="label">50%</span>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- NAVBAR -->
</body>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

</html>



