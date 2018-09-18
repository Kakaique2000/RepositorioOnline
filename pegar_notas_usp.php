<?php 
session_start();
include_once("conectar.php");

$numero=$_SESSION['numeroUsp'];
$sql = "SELECT * FROM eachnotas WHERE numeroUsp = $numero;";
    
    $resultado = $conn->query($sql);

    if((mysqli_num_rows($resultado))>0){
       
        $obj = $resultado->fetch_object();
        $_SESSION['pegarNotasStatus']=true;
       if($obj->p1!=null)$_SESSION['p1']=$obj->p1;
        else $_SESSION['p1']="null";
        if($obj->p2!=null)$_SESSION['p2']=$obj->p2;
        else $_SESSION['p2']="null";
       if($obj->sub!=null)$_SESSION['sub']=$obj->sub;
        else $_SESSION['sub']="null";
        if($obj->ep1!=null)$_SESSION['ep1']=$obj->ep1;
        else $_SESSION['ep1']="null";
        if($obj->ep2!=null)$_SESSION['ep2']=$obj->ep2;
        else $_SESSION['ep2']="null";
       if($obj->rec!=null)$_SESSION['rec']=$obj->rec;
        else $_SESSION['rec']="null";        
    }
    else {
      
        $_SESSION['pegarNotasStatus']=false;
    }
    $conn->close();
?>