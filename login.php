<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/styleL.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <title>Login</title>
</head>
<body>
    <section class="side">
        <img src="assets/img.svg" alt="">
    </section>

    <section class="main">
        <div class="login-container">
            <p class="title">Bem Vindo Novamente</p>
            <div class="separator"></div>
            <p class="welcome-message">Por favor, coloque suas informações de Login para ter acesso ao site</p>

            <form class="login-form" action="testLogin.php" method= "POST">
                <div class="form-control">
                    <input type="text" placeholder="CGM" required name="cgm">
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-control">
                    <input type="password" placeholder="Senha" name="senha"required>
                    <i class="fas fa-lock"></i>
                </div>

                <input class="submit" type= "submit" name="submit" value="Login">
            </form>
        </div>
    </section>
    
</body>
</html>