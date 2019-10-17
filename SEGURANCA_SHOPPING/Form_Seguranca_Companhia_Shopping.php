<?php

    include("classeLayout/classeCabecalhoHTML.php");
    include("cabecalho.php");
    require_once("classeForm/InterfaceExibicao.php");
    require_once("classeForm/classeInput.php");
    require_once("classeForm/classeButton.php");
    require_once("classeForm/classeForm.php");
    require_once("classeForm/classeOption.php");
    require_once("classeForm/classeSelect.php");
    include("conexao.php");

    $v = array("action"=>"insere.php?tabela=Seguranca_Companhia_Shopping","method"=>"post");
    $f = new Form($v);

    $select = "SELECT ID_Seguranca AS value, Nome AS texto FROM Seguranca ";
    $stmt = $conexao->prepare($select);
    $stmt->execute();

    while($linha=$stmt->fetch()){
        $matrizSeguranca[] = $linha;
    }	
    $v = array("name"=>"Cod_Seguranca");
    $f->add_select($v,$matrizSeguranca);

    $select = "SELECT ID_Companhia AS value, Nome AS texto FROM Companhia";
    $stmt = $conexao->prepare($select);
    $stmt->execute();

    while($linha=$stmt->fetch()){
        $matrizCompanhia[] = $linha;
    }	
        
    $v = array("name"=>"Cod_Companhia");
    $f->add_select($v,$matrizCompanhia);

    $select = "SELECT ID_Shopping AS value, Nome AS texto FROM Shopping";
    $stmt = $conexao->prepare($select);
    $stmt->execute();

    while($linha=$stmt->fetch()){
        $matrizShoping[] = $linha;
    }
        
    $v = array("name"=>"Cod_Shopping");
    $f->add_select($v,$matrizShoping);
    $v = array("texto"=>"ENVIAR");
    $f->add_button($v);	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<style> input{margin:4px;}</style>
</head>
<body>
<h3>Formulário - Inserir Companhia de Segunrança de um determinado Shopping </h3><hr />
<?php
$f->exibe();
?>
</body>
</html>
</html>