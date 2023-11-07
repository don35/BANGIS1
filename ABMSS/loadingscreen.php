<?php include 'index.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Very Easy way to set preloader in website | how to set preloader in html</title>
    <link rel="stylesheet" href="css/loader.css">
</head>
<body>

<div class="loader_bg">
    <div class="loader"></div>
</div>

<script>
    setTimeout(function(){
        $('.loader_bg').fadeToggle();
    }, 1500);
</script>
</body>
</html>