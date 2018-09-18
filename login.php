<?php
session_start();
if((isset($_SESSION['logado']))&& $_SESSION['logado']==true)header("Location: jaLogado.php");

?>
<html>


    <head>
        <title>Logue-se</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="css/mystyle.css">
    </head>

    <body>
        <section id="header" style="height: 260px" class="rounded-0 jumbotron my-auto text-center bg-dark">

            <h1 class="display-1 text-white my-auto">Prof. Kaique Lisboa</h1>
            <h2 class="text-white">repositório online</h2>

        </section>
        <section id="login" class="text-center">
            <div class="container">
                <h2 class="text-dark my-3">Faça seu Login para obter acesso à plataforma</h2>
                <form class="form-control mx-auto" style="max-width: 400px" method="post" action="php_proc_login.php">
                    <h3 class="mt-3">usuário</h3>
                    <input class="form-control max300px mt-3 mx-auto" type="text" name="username">
                    <h3 class="mt-3">senha</h3>
                    <input class="form-control max300px my-2 mx-auto"  type="password" name="pass">
                     <?php if(isset($_SESSION['erro'])&& $_SESSION['erro']) echo"<h5 class=\"text-danger\">Usuario ou senha incorretos</h5>"?>
                    <button class="btn btn-light border mt-1 mb-2" type="submit">login</button>
                   
                </form>
            </div>
        </section>

    </body>


</html>

<?php
  $_SESSION['erro']=false;  
?>