
<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['cgm']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['cgm']);
        unset($_SESSION['senha']);
        header('Location: ../login.php');
    }
    $logado = $_SESSION['cgm'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/site.webmanifest">  
    <link rel="stylesheet" href="../css/styleS.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title>J.A.E online</title>
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../img/logoJae.jpeg" alt="Logo">
                </span>

                <div class="text logo-text">
                    <span class="name">J.A.E</span>
                    <span class="profession">Grêmio Estudantil</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Menu</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../planos/planos.html">
                            <i class='bx bx-diamond icon' ></i>
                            <span class="text nav-text">Planos</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../resgate/resgatar.php">
                            <i class='bx bx-basket icon'></i>
                            <span class="text nav-text">Resgatar Combos</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="../embreve/embreve.html">
                            <i class='bx bx-info-circle icon' ></i>
                            <span class="text nav-text">Sobre Nós</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="https://www.instagram.com/jae.brb/">
                            <i class='bx bxl-instagram icon'></i>
                            <span class="text nav-text">Nosso Instagram</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="../sair/sair.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav> 
    <section class="home">
        <div class="text">Bem Vindo(a)</div>
    </section>
    <script src="../js/main.js"></script>
</body>
</html>
