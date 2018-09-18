<?php
session_start();
include_once("conectar.php");

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);


echo"$username, $pass";

$sql = "SELECT * FROM alunos WHERE username='$username' AND pass='$pass'";
$resultado = $conn->query($sql);

if((mysqli_num_rows($resultado))>0){
   
    $_SESSION['logado']=true;
    $_SESSION['username']=$username;
    $username= $_SESSION['username']=$username;
    
    $getVars =  mysqli_query($conn, "SELECT * FROM alunos WHERE username='$username'");
      $obj = $getVars->fetch_object();
    $_SESSION['nome'] = $obj->name;   
    $_SESSION['instituicao'] = $obj->instituicao;    
    $_SESSION['turma'] = $obj->turma;   
    $_SESSION['numeroUsp'] = $obj->numeroUsp;   
 
    
    
    
    
    $conn->close();
   header("location: index.php");
}

else {
    $_SESSION['erro']=true;
    $_SESSION['logado']=false;
    $conn->close();
    header("location: login.php");
}


?>