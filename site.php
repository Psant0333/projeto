<?php

$RECEBENOME = $_POST['inputname'];
$RECEBEPASS = $_POST['inputpass'];


try {
$username = "root";
$password = "81250767Pl";

        $db = new PDO("mysql:host=localhost;dbname=aplicativo;charset=utf8", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo ("<div><H2>VOCÊ FOI CADASTRADO COM SUCESSO, SIGA PARA O JOGO DA VELHA</H2>
        <a href='http://localhost/aplicativo.html'>JOGO DA VELHA</a>
        </div>");

    $RECEBEP = $RECEBENOME;
    $RECEBEB = $RECEBEPASS;

       $STMT = $db -> prepare('INSERT INTO aplicativo.login (nome, senha) VALUES (:NOMEP, :PASSP);');
    
    $STMT -> bindValue(':NOMEP',$RECEBEP);
    $STMT -> bindValue(':PASSP',$RECEBEB);
    $STMT -> execute();



}catch(PDOException $e) {
    echo("<h1>NÃO FOI POSSÍVEL REALIZAR SEU CADASTRO... :( </h1>" . $e->getMessage());
}




?>
