<?php include 'include/links.php'?>

<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION["userid"]) && isset($_SESSION["username"])) {
    header("Location: Abtc/abtc.php");
    exit();
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Bite Management System</title>
    
    
</head>
<body>
    <div class="loader_bg">
        <div class="loader"></div>
    </div> 
<section>
    <div class="imgBx">
        <img src="assets/images/background.jpg" alt="sidebackground">
    </div>
    <div class="contentBx">
        <div class="formBx">
            <h2>BANGIS: Batangas Animal Gateway Information System</h2>
            <form action="login.php" method="POST">
                <div class="inputBx">
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php } ?>
                    <span>Username</span>
                    <input type="text" name="uname" placeholder="Juan Dela Cruz">
                </div>
                <div class="inputBx">
                    <span>Password</span>
                    <input type="password" name="password" id="passwordField" placeholder="***********">
                    <span class="togglePassword" onclick="togglePasswordVisibility()"><i class="fa-solid fa-eye"></i></span>
                </div>
                <div class="inputBx">
                    <input type="submit" value="Log in" name="">
                </div>
            </form>
        </div>
    </div>
</section>
<script src="js/index.js"></script>
<script>
  setTimeout(function(){
        var loaderBg = document.querySelector('.loader_bg');
        loaderBg.style.display = 'none';
    }, 2000);
</script>
</body>
</html>