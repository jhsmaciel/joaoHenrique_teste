<?php 
    
    $dsn = 'mysql:host=localhost;dbname=mydb';
    $user = 'root';
    $password = '';
    try {
        $conexao = new PDO($dsn,$user,$password);
        /*
            $query = "
                create table tb_user (
                    id int not null primary key auto_increment,
                    nome varchar(50) not null,
                    email varchar(100) not null,
                    senha varchar(32) not null 
                )
            ";

            $retorno = $conexao->exec($query);

            echo $retorno;

            $query = "Insert into tb_user (nome,email,senha) values ('João','jhsmaciel15@gmail.com','123456')";

            $retorno = $conexao->exec($query);

            $query = "Insert into tb_user (nome,email,senha) values ('Pedro','Pedro@gmail.com','45678')";
                        
            $retorno = $conexao->exec($query);

            $query = "Insert into tb_user (nome,email,senha) values ('Caio','caio@gmail.com','998877')";
                        
            $retorno = $conexao->exec($query);
        */
    } catch (PDOException $e) {
        echo "Erro: " . $e->getCode();
    }
?>