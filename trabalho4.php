<?php

try {
$username = "root";
$password = "81250767Pl";

        $db = new PDO("mysql:host=localhost;dbname=fucapi1;charset=utf8", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $STMT = $db -> prepare('SELECT nome_professor1, sala, hora1, hora2, date1 FROM fucapi1.blocoe;');
    $STMT -> execute();
    $LISTAS = $STMT -> fetchAll();

    echo ("<table><tr><th>NOME DO PROFESSOR</th><th>SALA</th><th>HORARIO DE ENTRADA</th><th>HORARIO DE SAIDA</th><th>DATA DE CADASTRO</th> <style>th {border:solid black;}</style>");


   foreach ($LISTAS as $list){

    $RECEBENOME = $list['nome_professor1'];
    $RECEBESALA = $list['sala'];
    $RECEBEHORA1 = $list['hora1'];
    $RECEBEHORA2 = $list['hora2'];
    $RECEBEDATA = $list['date1'];

    echo ("
    <tr>
    <td>$RECEBENOME</td>
    <td>$RECEBESALA</td>
    <td>$RECEBEHORA1</td>
    <td>$RECEBEHORA2</td>
    <td>$RECEBEDATA</td>
    </tr>");

   }
   echo("</table>");


   echo ("<style>
   td {border:solid blue;}
   th {border:solid black;}
   </>");  


}catch(PDOException $e) {
    echo("<h1>NÃO FOI POSSIVEL REALIZAR SEU CADASTRO... :( </h1>" . $e->getMessage());
}




?>