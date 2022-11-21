<?php
use Source\Models\Aluno;

    require_once "./helpers.php";
    require_once "./source/Models/Aluno.php";


    // ESTUDAR: https://www.devmedia.com.br/introducao-ao-php-pdo/24973
    // ESTUDAR: https://www.devmedia.com.br/introducao-ao-php-pdo/24973
    // ESTUDAR: https://www.devmedia.com.br/introducao-ao-php-pdo/24973


    if(!empty($_POST['submit']) && !empty($_POST['cgm']) && !empty($_POST['senha'])) {
        $data = filter_var_array($_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // Acessa
        $cgm = $data['cgm'];
        $senha = $data['senha'];

        $aluno = (new Aluno())->find("cgm = :cgm AND senha = :senha", "cgm={$cgm}&senha={$senha}");

        if(!$aluno->count()) {
            header('Location: login.php');
        } else {
            $_SESSION['userId'] = $aluno->fetch()->id;
            header('Location: sistema/sistema.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: login.php');
    }
?>