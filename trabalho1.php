<?php

$RECEBENOME = $_POST['inputname'];
$RECEBESALA = $_POST['inputsala'];
$RECEBEDATE1 = $_POST['inputdate1'];
$RECEBEDATE2 = $_POST['inputdate2'];  
$RECEBEHORA = $_POST['inputhora'];



try {
$username = "root";
$password = "81250767Pl";

        $db = new PDO("mysql:host=localhost;dbname=fucapi1;charset=utf8", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo ("<div><H2>CADASTRO DO BLOCO E DO PROFESSOR CONCLUIDO</H2></div>");

    $RECEBEN = $RECEBENOME;
    $RECEBES = $RECEBESALA;
    $RECEBED1 = $RECEBEDATE1;
    $RECEBED2 = $RECEBEDATE2;
    $RECEBEH = $RECEBEHORA;


       $STMT = $db -> prepare('INSERT INTO fucapi1.blocoe (nome_professor1, sala, hora1, hora2, date1) VALUES (:NOMEPR, :SALAS, :DATE1D, :DATE2D, :HORAH);');
    
    $STMT -> bindValue(':NOMEPR',$RECEBEN);
    $STMT -> bindValue(':SALAS',$RECEBES);
    $STMT -> bindValue(':DATE1D',$RECEBED1);
    $STMT -> bindValue(':DATE2D',$RECEBED2);
    $STMT -> bindValue(':HORAH',$RECEBEH);
    $STMT -> execute();



}catch(PDOException $e) {
    echo("<h1>NÃO FOI POSSÍVEL REALIZAR SEU CADASTRO... :( </h1>" . $e->getMessage());
}




?>