<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styleC.css">
  <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
  <link rel="manifest" href="../favicon/site.webmanifest">  
  <script defer src="script.js"></script>
  <title>Confirme suas informações</title>
</head>
<body>
  <main class="login">
    <div class="login__container">
      <h1 class="login__title">Confirme as suas Informações</h1>
      <h2 class="subtitulo">(coloque as informações exatamente igual ao registro)</h2>
      <form class="login__form" action="/site/confirmar/confirm-action.php" method="POST">
        <input class="login__input" type="nome" name="nome" placeholder="Nome" required />
        <span class="login__input-border"></span>
        <input class="login__input" type="cgm" name="cgm" placeholder="CGM"required/>
        <span class="login__input-border"></span>
        <input class="login__input" type="turma" name="turma" placeholder="Turma"required/>
        <span class="login__input-border"></span>
        <input class="login__input" type="telefone" name="telefone" placeholder="telefone"required/>
        <span class="login__input-border"></span>
        <input class="login__submit"type="submit" name="submit" value="Confirmar">
      </form>
    </div>
  </main>
</body>
</html>