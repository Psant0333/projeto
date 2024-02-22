<?php

try {
$username = "root";
$password = "81250767Pl";

        $db = new PDO("mysql:host=localhost;dbname=aplicativo;charset=utf8", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $STMT = $db -> prepare('SELECT nome, senha FROM aplicativo.login;');
    $STMT -> execute();
    $LISTAS = $STMT -> fetchAll();

    echo ("<table><tr><th>NOME</th><th>SENHA</th> <style>th {border:solid black;}</style>");


   foreach ($LISTAS as $list){

    $RECEBASUPREMONOME = $list['nome'];
    $RECEBASUPREMOPASS = $list['senha'];

    echo ("
    <tr>
    <td>$RECEBASUPREMONOME</td>
    <td>$RECEBASUPREMOPASS</td>
    </tr>");

   }
   echo("</table>");


   echo ("<style>
   td {border:solid black;}
   th {border:solid black;}
   </>");  


}catch(PDOException $e) {
    echo("<h1>NÃO FOI POSSIVEL REALIZAR SEU CADASTRO... :( </h1>" . $e->getMessage());
}




?>
