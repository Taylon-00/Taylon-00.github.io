<?php
     $servidor = "localhost";
     $porta = 5432;
     $bancoDeDados = "teste";
     $usuario = "postgres";
     $senha = "admin";

     $conexao = pg_connect("host=$servidor port=$porta dbname=$bancoDeDados " +
                                     "user=$usuario password=$senha");
     if(!$conexao) {
         die("Não foi possível se conectar ao banco de dados.");
     }
?>
