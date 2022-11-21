
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
    <?php include "../widgets/menu.php" ?>

    <section class="home">
        <div class="text">Bem Vindo(a) <?= $user->nome ?></div>
    </section>
    <script src="../js/main.js"></script>
</body>
</html>
