<?php
session_start();
?>
<html>


    <head>
        <title>Logue-se</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/mystyle.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    </head>

    <body>
        <section id="header" style="height: 260px" class="rounded-0 jumbotron my-auto text-center bg-dark">

            <h1 class="display-1 text-white my-auto">Prof. Kaique Lisboa</h1>
            <h2 class="text-white">repositório online</h2>

        </section>
        <section id="login" class="text-center">
            <div class="container">
                <h2 class="text-dark my-3">Faça seu Login para obter acesso à plataforma</h2>
                <div class="card max400px mx-auto"><h5 class="m-4">Voce ja está logado <strong><?php echo($_SESSION['nome'])?></strong>, clique <a href="deslogar.php">aqui</a> para se deslogar ou <a href="index.php">aqui</a> para ir para a página principal</h5>
                </div>
            </div>
        </section>

    </body>


</html>