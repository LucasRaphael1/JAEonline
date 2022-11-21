<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['cgm']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $cgm = $_POST['cgm'];
        $senha = $_POST['senha'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM alunostabela WHERE cgm = '$cgm' and senha = '$senha'";

        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['cgm']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['cgm'] = $cgm;
            $_SESSION['senha'] = $senha;
            header('Location: sistema/sistema.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: login.php');
    }
?>