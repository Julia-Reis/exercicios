<?php
    $p = null;
    $p["cabecalho"] = array("Nome","Descricao","Preco");

    include "conexao.php";

    $sql = "SELECT * FROM lanche ORDER BY nome";

    $resultado = $conexao->query($sql);

    foreach($resultado as $linha){
        $p["dados"][]=$linha;
    }
?>