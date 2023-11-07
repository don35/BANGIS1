<?php include '../include/links.php'?>
<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION["userid"]) || $_SESSION['role'] !== 'ABTC') {
    header("Location: ../index.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Animal Bite Treatment Center</title>
	<script src="../js/index.js"></script>
	<link rel="stylesheet" href="../css/abtc.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css">

</head>
<body>
	
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand"><i class='bx bxs-smile icon'></i><?php echo $_SESSION['username']; ?></a>
		<ul class="side-menu">
			<li><a href="abtc.php" class="active"><i class='bx bxs-dashboard icon' ></i> Dashboard</a></li>
			<li class="divider" data-text="main">Transactions</li>
			<li><a href="animalbiteregistry.php"><i class="bx bxs-widget icon"></i>Animal Bite Registry</a></li>
			<li><a href="animalvaccinationregistry.php"><i class='bx bxs-group icon'></i>Animal Vaccination Registry</a></li>
			<li><a href="humanantirabiesvaccineinventory.php" ><i class='bx bxs-injection icon'></i>Human Anti-Rabies Vaccine Inventory</a></li>
			<li><a href="humanrabiescases.php"><i class='bx bxs-report icon'></i>Human Rabies Cases</a></li>	
			<li class="divider" data-text="Others">Transactions</li>
			<li><a href="communication.php"><i class='bx bxs-conversation icon'></i>Communications</a></li>
		</ul>
		<!--<div class="ads">
			<div class="wrapper">
				<a href="../../logout.php" class="btn-upgrade">Logout</a>	
			</div>
		</div>-->	
	</section>
	<!-- SIDEBAR -->

	<!-- NAVBAR -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu toggle-sidebar' ></i>
			<form action="#">
			</form>
			<a href="#" class="nav-link" id="chatIcon">
				<i class='bx bxs-bell icon' ></i>
				<span class="badge">5</span>
			</a>
			
			<span class="divider"></span>
			<div class="profile">
				<img src="../assets/images/logo.png" alt="users">			
				<ul class="profile-link">
					<li><a href="../logout.php"><i class='bx bxs-log-out-circle' ></i> Logout</a></li>
				</ul>
			</div>
		</nav>
		<!-- NAVBAR -->

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
							<p>Bite Cases in Province</p>
						</div>
					</div>
					<span class="progress" data-value="40%"></span>
					<span class="label">40%</span>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>100</h2>
							<p>Vaccinated Dogs/Cats</p>
						</div>
					</div>
					<span class="progress" data-value="60%"></span>
					<span class="label">60%</span>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2>10</h2>
							<p>Available Vaccines</p>
						</div>
					</div>
					<span class="progress" data-value="30%"></span>
					<span class="label">30%</span>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- NAVBAR -->
	
	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	
</body>
</html>



