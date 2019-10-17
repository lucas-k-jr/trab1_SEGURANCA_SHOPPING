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
	
	$select = "SELECT ID_Cidade AS value, Nome AS texto FROM Cidade";
	$stmt = $conexao->prepare($select);
	$stmt->execute();
    
	while($linha=$stmt->fetch()){
		$matriz[] = $linha;
	}	
	$v = array("action"=>"insere.php?tabela=Companhia","method"=>"post");
	$f = new Form($v);
	
	$v = array("type"=>"text","name"=>"ID_Companhia","placeholder"=>"ID da Companhia...");
	$f->add_input($v);

	$v = array("type"=>"text","name"=>"Nome","placeholder"=>"Nome...");
	$f->add_input($v);
	
	$v = array("name"=>"Cod_Cidade");
	$f->add_select($v,$matriz);
	
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
<h3>Formulário - Inserir Companhia</h3><hr />
<?php
	$f->exibe();
?>
</body>
</html>
</html>