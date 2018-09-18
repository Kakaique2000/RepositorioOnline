<?php

session_start();
if(!(isset($_SESSION['logado']))||$_SESSION['logado']==false){
    $_SESSION['erro']=false;
    header("Location: erroLogin.php");

}
include_once("pegar_notas_usp.php");
?>
<html>

    <head>
        <title>Bem vindo <?php echo($_SESSION['nome'])?> </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="css/mystyle.css">

        <script src="js/main.js" type="text/javascript"></script>

        <script type="text/javascript">
            $(function(){


            });


            function loadNotas(){

                $("#notasDiv").slideToggle();


                if("<?php echo($_SESSION['instituicao'])?>"=="USP-Each"){
                    var notafinal = 0;
                    var nf= "Não Feito";
                    var p1 = <?php echo($_SESSION['p1']) ?>;
                    var p2 = <?php echo($_SESSION['p2']) ?>;
                    var sub = <?php echo($_SESSION['sub']) ?>;

                    var ep1 = <?php echo($_SESSION['ep1']) ?>;
                    var ep2 = <?php echo($_SESSION['ep2']) ?>;
                    var rec = <?php echo($_SESSION['rec']) ?>;

                    notafinal = (ep1 + ep2)/4;

                    if(sub!=null){
                        if(p1==null) notafinal+=(sub+p2)/4;
                        else if(p2==null) notafinal+=(sub+p1)/4;
                    }
                    else notafinal+=(p1+p2)/4;
                    if(rec!=null) notafinal=(notafinal+rec)/2;

                    if (p1==null) p1=nf;
                    $("#p1val").text(p1);                   
                    if (p2==null) p2=nf;
                    $("#p2val").text(p2);                   
                    if (sub==null) sub=nf;
                    $("#subval").text(sub);                    
                    if (ep1==null) ep1=nf;
                    $("#ep1val").text(ep1);                    
                    if (ep2==null) ep2=nf;
                    $("#ep2val").text(ep2);                    
                    if (rec==null) rec=nf;
                    $("#recval").text(rec);
                    $("#finalNota").text(notafinal);
                    if(notafinal<5)$("#finalRow").attr("class","table-danger");
                    else $("#finalRow").attr("class","table-success");



                }

            }
        </script>


    </head>
    <body>

        <section id="header" style="height: 315px; padding: 2rem 2rem;" class="rounded-0 jumbotron my-auto  bg-dark">

            <h1 class="display-3 text-white my-auto"><?php echo($_SESSION['nome'])?></h1>
            <h2 class="text-white">seu repositório online</h2>
            <h4 class="text-white"><?php echo"<strong>Instituição:</strong> ";echo($_SESSION['instituicao']);?></h4>
            <h4 class="text-white"><?php echo"<strong> Turma:</strong>"; echo($_SESSION['turma']);  ?></h4>
            <h4 class="text-white"><?php echo"<strong> Indentificação:</strong>"; echo($_SESSION['numeroUsp']);  ?></h4>
            <h5><a class="text-warning"href="deslogar.php">Deslogar</a></h5>

        </section>

        <nav class="navbar sticky-top navbar-expand-sm navbar-light border bg-light">

            <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-3">
                    <h3><a class="nav-link" href="#" >Aulas</a></h3>
                </li>
                <li class="nav-item mx-3">
                    <h3><a class="nav-link" style="cursor: pointer;" onclick="loadNotas()">Notas</a></h3>
                </li>
                <li class="nav-item mx-3">
                    <h3><a class="nav-link" href="#">Provas</a></h3>
                </li>
                <li class="nav-item mx-3">
                    <h3><a class="nav-link" href="#">Chat</a></h3>
                </li>
            </ul>
        </nav>
        <section class="container">
            <h1 class="text-center">Don't give up now, the worst is yet coming...</h1>

            <div class="container text-center mx-auto max400px m-4" style="display:none"id="notasDiv">
                <h5>Notas para n°<?php echo($_SESSION['numeroUsp'])?> atualizado a ultima vez em: <?php echo($_SESSION['attNotas'])?></h5>
                <table class="table table-bordeless table-hover">
                    <thead>
                        <tr class="thead-dark">
                            <th>Avaliação</th>
                            <th>Nota</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>p1</td>
                            <td id="p1val"></td>

                        </tr>
                        <tr>
                            <td>p2</td>
                            <td id="p2val"></td>

                        </tr>
                        <tr>
                            <td>sub</td>
                            <td id="subval"></td>

                        </tr>
                        <tr>
                            <td>ep1</td>
                            <td id="ep1val"></td>

                        </tr>
                        <tr>
                            <td>ep2</td>
                            <td id="ep2val"></td>

                        </tr>
                        <tr>
                            <td>rec</td>
                            <td id="recval"></td>

                        </tr>
                        <tr id="finalRow">
                            <td>nota final</td>
                            <td id="finalNota"></td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="aulasDiv"></div>
            <img src="https://sciencenotes.org/wp-content/uploads/2015/04/MathJokes.jpg" class="mx-auto mt-3 rounded d-block" width="400px" height="400px">
        </section>
    </body>

</html>
