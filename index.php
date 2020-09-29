<?php
    session_start();
    if(isset($_SESSION['nome'])){
        header('location:home/central_de_volumes.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="shortcut icon" href="imagens/moeda.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/alerta.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <main class="container-fluid">
        <section class="row justify-content-center linha_login">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <h1>Financeiro Pessoal</h1>
            <form id="formularioLogin">
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-file-earmark-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
                  <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/>
                  <path fill-rule="evenodd" d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  <path d="M8 12c4 0 5 1.755 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12z"/>
                </svg>
                <input type="text" placeholder="login" name="nm_login" required><br>
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-file-earmark-lock2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm7.5 1.5v-2l3 3h-2a1 1 0 0 1-1-1zM7 7a1 1 0 0 1 2 0v1H7V7zm3 0v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V9.3c0-.627.46-1.058 1-1.224V7a2 2 0 1 1 4 0z"/>
                </svg>
                <input type="password" placeholder="Senha" name="nm_senha" required><br>
                <button type="submit">Logar</button>
            </form>
            </div>
        </section>
    </main>
    <script src="js/jQuery_v3.5.1.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/login.js"></script>
    <?php require_once('alerta/alert.php'); ?>
</body>
</html>