<?php 

    include_once('conexao.php');

    $idMot = $_POST['selectOption1'];
    $idPass = $_POST['selectOption2'];
    $valor = $_POST['valor'];

    $query = "insert into corrida (idMot, idPass, valor) 
    values ('$idMot','$idPass',$valor)";
    
    $retorno = $conexao->exec($query);

    header('Location: corridas.php');
?>