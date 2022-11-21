<?php
use Source\Models\Aluno;

require_once "../helpers.php";
require "../source/Models/Aluno.php";

if (empty($_SESSION["userId"])) {
    unset($_SESSION['userId']);
    header('Location: /site/login.php');
} else {
    $user = (new Aluno())->findById($_SESSION['userId']);
}

if (!empty($_GET["error"])) {
    if ($_GET["error"] == "true") {
        echo "<script>
        if (confirm(`Ooops! Parece que tivemos um problema com a sua requisição...`)){
            window.location.href = `/site/resgate/resgatar.php`
        }
        </script>";
    } else {
        echo "<script>
        if (confirm(`Tudo certo, combo resgatado com sucesso!`)){
            window.location.href = `/site/resgate/resgatar.php`
        }
        </script>";
    }
}

if (!empty($_GET["planError"])) {
    echo "<script>
    if (confirm(`Ooops! Você precisa de um plano para resgatar os combos...`)){
        window.location.href = `/site/resgate/resgatar.php`
    }
    </script>";
}

if (!empty($_GET["comboError"])) {
    echo "<script>
    if (confirm(`Ooops! Parece que você não tem combos para resgatar...`)){
        window.location.href = `/site/resgate/resgatar.php`
    }
    </script>";
}

if (!empty($_GET["problms"])) {
    echo "<script>
    if (confirm(`Ooops! Parece que os dados informados não conferem...`)){
        window.location.href = `/site/resgate/resgatar.php`
    }
    </script>";
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
<?php include "../widgets/menu.php" ?>

    <div class="resgatar">
        <div class="card">
            <div class="circle"></div>
            <form class="content">
                <h2>Combo Pão de Queijo + Toddynho</h2>
                <p>Combo pão de queijo + Toddynho, resgate esse combo e pegue as recompensas na cantina!</p>
                <a class="button" href="/site/confirmar/confirm.php">Resgatar</a>
            </form>
            <img src="../img/img.png">
        </div>
    </div>
    <script src="../js/mainR.js"></script>
</body>
</html>
