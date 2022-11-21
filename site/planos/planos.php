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
        if (confirm(`Erro ao se cadastrar no plano...`)){
            window.location.href = `/site/planos/planos.php`
        }
        </script>";
    } else {
        echo "<script>
        if (confirm(`Tudo certo, plano cadastrado com sucesso!`)){
            window.location.href = `/site/planos/planos.php`
        }
        </script>";
    }
}

?>

<!DOCTYPE html>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale= 1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/site.webmanifest">  
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../css/styleP.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Planos J.A.E</title>

</head>
<body>
<?php include "../widgets/menu.php" ?>

    <div class="pricing-table">
      <div class="pricing-card">
        <h3 class="pricing-card-header">gold</h3>
        <div class="price"><sup>R$</sup>15<span></span></div>
        <ul>
          <li><strong>4</strong> combos</li>
          <li><strong>2 </strong> voucher</li>
          <li><strong>2</strong> Sorteios mensais de R$50</li>
          <li><strong>2</strong> semanas de duração</li>
        </ul>
        <a href="/site/planos/set-plano.php?plan=gold" class="order-btn">Assinar Plano</a>
      </div>
  
      <div class="pricing-card">
        <h3 class="pricing-card-header">diamond</h3>
        <div class="price"><sup>R$</sup>25<span></span></div>
        <ul>
          <li><strong>10</strong> combos</li>
          <li><strong>4 </strong> voucher</li>
          <li><strong> 2</strong> Sorteios mensais de R$75</li>
          <li><strong>4</strong> semanas de duração</li>
        </ul>
        <a href="/site/planos/set-plano.php?plan=diamond" class="order-btn">Assinar Plano</a>
      </div>
    </div>
    <script src="../js/main.js"></script>
</body>
</html>
