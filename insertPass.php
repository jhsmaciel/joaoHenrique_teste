<?php 

    include_once('conexao.php');

    $nome = $_POST['name'];
    $dateNas = $_POST['dateNas'];
    $cpf = $_POST['cpf'];
    $sexo = $_POST['sexo'];

    $query = "insert into passageiro (nomePassageiro, dataNascimento, cpfPassageiro, sexo) 
    values ('$nome','$dateNas',$cpf,'$sexo')";
    
    $retorno = $conexao->exec($query);

    echo($retorno);

    header('Location: cadastroPassageiro.php');

?>