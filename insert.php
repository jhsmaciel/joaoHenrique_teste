<html>
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <?php 
        include_once('conexao.php');
        $nome = $_POST['name'];
        $modelCar = $_POST['modelCar'];
        $dateNas = $_POST['dataNas'];
        $cpf = $_POST['cpf'];
        $status = $_POST['status'];
        $sexo = $_POST['sexo'];
        
        $query = "insert into motorista (nomeMotorista, modeloCarro, dataNascimento, status, cpfMotorista, sexo) 
        values ('$nome','$modelCar','$dateNas',$status,$cpf,'$sexo')";
        
        $conexao->exec($query);
        
        header('Location: cadastroMotorista.php'); 
    ?>
</body>
</html>
