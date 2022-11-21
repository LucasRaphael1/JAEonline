<?php
use Source\Models\Aluno;
use Source\Models\Resgate;

require_once "../helpers.php";
require "../source/Models/Aluno.php";
require "../source/Models/Resgate.php";

if (empty($_SESSION["userId"])) {
    unset($_SESSION['userId']);
    header('Location: /site/login.php');
} else {
    $user = (new Aluno())->find("id = :id", "id={$_SESSION['userId']}")->fetch();
}

if (empty($_GET["plan"])) { header("Location: /site/planos/planos.php?error=false"); exit(); }

$user->plano = $_GET["plan"];

//if ($_GET["plan"] == "diamond") $user->combos = 10;
if ($_GET["plan"] == "diamond") $user->combos += 10;

//if ($_GET["plan"] == "gold") $user->combos = 4;
if ($_GET["plan"] == "gold") $user->combos += 4;


if (!$user->save()) {
    header("Location: /site/planos/planos.php?error=true");
    exit();
} 

header("Location: /site/planos/planos.php?error=false");
exit();