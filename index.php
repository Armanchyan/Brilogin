<?php
    include "service/database.php";
    session_start();
    $login_message = "";

    if(isset($_SESSION["is_login"])){
        header("location: dashboard.php");
    }
    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result =$db->query($sql);

        if ($result->num_rows > 0) {
            $data  = $result->fetch_assoc();
            $_SESSION ["username"] = $data["username"];
            $_SESSION ["is_login"] = true;
            header("location:  dashboard.php");


        }else {
           $login_message = "akun tidak ada";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link type="image/png" sizes="32x32" rel="icon" href=".../icons8-fingerprint-32.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="manifest" href="/manifest.json">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>BriMo</title>
</head>
<body>
    <!-- Start Lobby interface -->
    <div class="background"> 
        <img class="logo_bri" src="img/WhatsApp Image 2024-05-18 at 21.24.03.jpeg">
    </div>
    <div class="fast">Fast Menu <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="20" viewBox="100,2,100,240">
        <g fill="#05abf8" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(2,2)"><path d="M64,6c-32,0 -58,26 -58,58c0,32 26,58 58,58c32,0 58,-26 58,-58c0,-32 -26,-58 -58,-58zM64,12c28.7,0 52,23.3 52,52c0,28.7 -23.3,52 -52,52c-28.7,0 -52,-23.3 -52,-52c0,-28.7 23.3,-52 52,-52zM64,30c-4.97056,0 -9,4.02944 -9,9c0,4.97056 4.02944,9 9,9c4.97056,0 9,-4.02944 9,-9c0,-4.97056 -4.02944,-9 -9,-9zM64,59c-5,0 -9,4 -9,9v24c0,5 4,9 9,9c5,0 9,-4 9,-9v-24c0,-5 -4,-9 -9,-9z"></path></g></g>
        </svg> </div>
    <div class="fast_mode">
            <button class="logo_catatan">
                <img class="catatan" src="img/catatan_keuangan.png">
                <div class="text_logo">
                    Catatan Keuangan
                </div>
               </img>
            </button>
            <button class="logo_brizzi">
                <img class="brizzi" src="img/brizzi.png">
                <div class="text_logo" id="text_logo">
                    BRIZZI
                </div>
            </img>
            </button>
            <button class="logo_Ewallet">
                <img class="e_wallet" src="img/E_wallet.png">
            </img>
            <div class="text_logo" id="text_logo">
                E Wallet
            </div>
            </button>
            <button class="logo_pulsaData">
                <img class="pulsa_data" src="img/pulsa_data.png">
            <div class="text_logo" id="text_logo">
                Pulsa/Data
            </div>
            </img>
            </button>
        </div>
    <div class="container_login">
        <button class="btn_login">Login</button>
    </div> 
    <div class="container_fingerprint">
        <button class="btn_fingerprint">
            <svg xmlns="http://www.w3.org/2000/svg"  height="30px" fill="currentColor" class="bi bi-fingerprint" viewBox="-1 0 16 16">
                <path d="M8.06 6.5a.5.5 0 0 1 .5.5v.776a11.5 11.5 0 0 1-.552 3.519l-1.331 4.14a.5.5 0 0 1-.952-.305l1.33-4.141a10.5 10.5 0 0 0 .504-3.213V7a.5.5 0 0 1 .5-.5Z"/>
                <path d="M6.06 7a2 2 0 1 1 4 0 .5.5 0 1 1-1 0 1 1 0 1 0-2 0v.332q0 .613-.066 1.221A.5.5 0 0 1 6 8.447q.06-.555.06-1.115zm3.509 1a.5.5 0 0 1 .487.513 11.5 11.5 0 0 1-.587 3.339l-1.266 3.8a.5.5 0 0 1-.949-.317l1.267-3.8a10.5 10.5 0 0 0 .535-3.048A.5.5 0 0 1 9.569 8m-3.356 2.115a.5.5 0 0 1 .33.626L5.24 14.939a.5.5 0 1 1-.955-.296l1.303-4.199a.5.5 0 0 1 .625-.329"/>
                <path d="M4.759 5.833A3.501 3.501 0 0 1 11.559 7a.5.5 0 0 1-1 0 2.5 2.5 0 0 0-4.857-.833.5.5 0 1 1-.943-.334m.3 1.67a.5.5 0 0 1 .449.546 10.7 10.7 0 0 1-.4 2.031l-1.222 4.072a.5.5 0 1 1-.958-.287L4.15 9.793a9.7 9.7 0 0 0 .363-1.842.5.5 0 0 1 .546-.449Zm6 .647a.5.5 0 0 1 .5.5c0 1.28-.213 2.552-.632 3.762l-1.09 3.145a.5.5 0 0 1-.944-.327l1.089-3.145c.382-1.105.578-2.266.578-3.435a.5.5 0 0 1 .5-.5Z"/>
                <path d="M3.902 4.222a5 5 0 0 1 5.202-2.113.5.5 0 0 1-.208.979 4 4 0 0 0-4.163 1.69.5.5 0 0 1-.831-.556m6.72-.955a.5.5 0 0 1 .705-.052A4.99 4.99 0 0 1 13.059 7v1.5a.5.5 0 1 1-1 0V7a3.99 3.99 0 0 0-1.386-3.028.5.5 0 0 1-.051-.705M3.68 5.842a.5.5 0 0 1 .422.568q-.044.289-.044.59c0 .71-.1 1.417-.298 2.1l-1.14 3.923a.5.5 0 1 1-.96-.279L2.8 8.821A6.5 6.5 0 0 0 3.058 7q0-.375.054-.736a.5.5 0 0 1 .568-.422m8.882 3.66a.5.5 0 0 1 .456.54c-.084 1-.298 1.986-.64 2.934l-.744 2.068a.5.5 0 0 1-.941-.338l.745-2.07a10.5 10.5 0 0 0 .584-2.678.5.5 0 0 1 .54-.456"/>
                <path d="M4.81 1.37A6.5 6.5 0 0 1 14.56 7a.5.5 0 1 1-1 0 5.5 5.5 0 0 0-8.25-4.765.5.5 0 0 1-.5-.865m-.89 1.257a.5.5 0 0 1 .04.706A5.48 5.48 0 0 0 2.56 7a.5.5 0 0 1-1 0c0-1.664.626-3.184 1.655-4.333a.5.5 0 0 1 .706-.04ZM1.915 8.02a.5.5 0 0 1 .346.616l-.779 2.767a.5.5 0 1 1-.962-.27l.778-2.767a.5.5 0 0 1 .617-.346m12.15.481a.5.5 0 0 1 .49.51c-.03 1.499-.161 3.025-.727 4.533l-.07.187a.5.5 0 0 1-.936-.351l.07-.187c.506-1.35.634-2.74.663-4.202a.5.5 0 0 1 .51-.49"/>
              </svg>
        </button>
    </div>
    <div class="cntainer_info">
        <button class="btn_info">

        </button>
    </div> 
    <!-- End lobby interface -->
    
    <!-- Start Login interface -->
    <div class="loginInterface">
        <div class="textLogin">Login</div>
        <div class="textCancel"><a href="#">Batalkan</a></div>
        <div class="inputInterface">
            <form action="index.php" method="POST">
            <i class="bi bi-person-fill" id="iconPerson"></i>
            <input type="text" id="username" name="username" placeholder="Username" />
            <i class="fa-solid fa-lock" id="iconLock"></i>
            <input type="password" id="password" name="password" placeholder="Password" />
            <div class="btnLogin">
            <button type="submit" class="loginBtn" name="login">Login</button>
            </div>
            </form>
            <i><?= $login_message  ?></i>
        </div>
        
            
        
        <div class="lupaPassword"><a href="#">
            Lupa Username/Password?
        </a>
    </div>
    </div>
    <script src="script.js"></script>
    <script
      src="https://kit.fontawesome.com/b567c2f36c.js"
      crossorigin="anonymous"
    ></script>
</body>
</html>
