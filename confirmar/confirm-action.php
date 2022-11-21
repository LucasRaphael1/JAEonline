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

if (!empty($_POST)) {
    $data = filter_var_array($_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $nome = $data['nome'];
    $cgm = $data['cgm'];
    $turma = $data['turma'];
    $telefone = $data['telefone'];

    if (empty($user->plano)){
        header("Location: /site/resgate/resgatar.php?planError=true");
        exit();
    }

    if ($nome != $user->nome || $cgm != $user->cgm || $turma != $user->turma || $telefone != $user->telefone) {
        header("Location: /site/resgate/resgatar.php?problms=true");
        exit();
    }

    if ($user->combos == 0){
        header("Location: /site/resgate/resgatar.php?comboError=true");
        exit();
    }

    $user->combos -= 1;
    if (!$user->save()) {
        header("Location: /site/resgate/resgatar.php?error=true");
        exit();
    } 


    $resgate = new Resgate();
    $resgate->id_aluno = $user->id;
    $resgate->plan = $user->plano;

    if (!$resgate->save()) {

        dd($resgate->fail());

        $user->combos += 1;
        if (!$user->save()) {
            header("Location: /site/resgate/resgatar.php?error=true");
            exit();
        } 

        header("Location: /site/resgate/resgatar.php?error=true");
        exit();
    } 
    
    header("Location: /site/resgate/resgatar.php?error=false");
    exit();
}

header("Location: /site/resgate/resgatar.php?postError=true");
exit();