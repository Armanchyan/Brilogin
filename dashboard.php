<?php 
session_start();
if (isset($_POST["logout"])) {
    session_unset();
    session_destroy();
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesDashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link type="image/png" sizes="32x32" rel="icon" href=".../icons8-fingerprint-32.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- <link rel="manifest" href="/manifest.json"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="logoNav">Logo</div>
        <div class="nameNav">
            <p class="userLogin">Hai, <br><b><?= $_SESSION["username"]?></b></br></p>
            <i class="bi bi-bell" id="iconBell"></i>
        </div>
        <div class="serviceUser">
        <i class="bi bi-headset" id="userSer"></i>
        <p class="textSer"><b>Pusat <br>Bantuan</b></p>
        </div>       
    </nav>
</body>
</html>