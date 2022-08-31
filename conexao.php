<?php 
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'ftag';

    $conect = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

   // if($conect->connect_errno)
   // {
   //     echo "Erro de conexao";   
   // }
   // else 
   // {  
   //     echo "Conectado"; 
   // }
?>