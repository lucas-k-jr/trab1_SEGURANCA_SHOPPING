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

	$v = array("action"=>"insere.php?tabela=Seguranca","method"=>"post");
	$f = new Form($v);
	
	$v = array("type"=>"number","name"=>"ID_Seguranca","placeholder"=>"ID Seguranca...");
	$f->add_input($v);

	$v = array("type"=>"text","name"=>"Nome","placeholder"=>"Nome ...");
	$f->add_input($v);
	
    $v = array("type"=>"text","name"=>"Sobrenome","placeholder"=>"Sobrenome ...");
	$f->add_input($v);

	$matrizSexo = Array ('value' => 'Feminino [0]'  => 'Feminino ');
	$matrizSexo = Array ('value' => 'Masculino [1]'  => 'Masculino');
	$v = array("type"=>"text","name"=>"Sexo");
    $f->add_select($v, $matrizSexo);
    $v = array("type"=>"text","name"=>"Email","placeholder"=>"email ...");
    $f->add_input($v);
    $v = array("type"=>"text","name"=>"Data_Nascimento","placeholder"=>"Data_Nascimento ...");
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
<h3>Formulário - Inserir Seguranca</h3><hr />
<?php
	$f->exibe();
?>
</body>
</html>
</html>