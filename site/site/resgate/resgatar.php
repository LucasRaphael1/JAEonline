<?php

    include_once('../config.php');
    session_start();

    $nome = $_SESSION['nome'];
    $cgm = $_SESSION['cgm'];
    $turma = $_SESSION['turma'];
    $telefone = $_SESSION['telefone'];

    if((!isset($_SESSION['cgm']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['cgm']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    if(isset($_POST['submit']))
    {
        $result = mysqli_query($conexao, "INSERT INTO resgate(nome,cgm,turma,telefone) VALUE    S ('$nome','$cgm','$turma','$telefone')");

        header('Location: ../confirmar/confirm.php');
    }
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
    <link rel="stylesheet" href="../css/styleRe.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
                        <a href="../sistema/sistema.php">
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
                        <a href="#">
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


    <div class="resgatar">
        <div class="card">
            <div class="circle"></div>
            <form class="content" action="resgatar.php" method="POST">
                <h2>Combo Pão de Queijo + Toddynho</h2>
                <p>Combo pão de queijo + Toddynho, resgate esse combo e pegue as recompensas na cantina!</p>
                    <input class="button" name="submit" id="submit" type="submit" value="Resgatar">
            </form>
            <img src="../img/img.png">
        </div>
    </div>
    <script src="../js/mainR.js"></script>
</body>
</html>
