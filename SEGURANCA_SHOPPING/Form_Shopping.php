<?php

    include("classeLayout/classeCabecalhoHTML.php");
	include("cabecalho.php");
	
	require_once("classeForm/InterfaceExibicao.php");
	require_once("classeForm/classeInput.php");
	require_once("classeForm/classeButton.php");
	require_once("classeForm/classeForm.php");
	
	$v = array("action"=>"insere.php?tabela=Shopping","method"=>"post");
	$f = new Form($v);
	
    $v = array("type"=>"number","name"=>"ID_Shopping","placeholder"=>"ID Do Shopping...");
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"Nome","placeholder"=>"Nome...");
    $f->add_input($v);
    
	$v = array("texto"=>"ENVIAR");
	$f->add_button($v);	
?>
<h3>Formulário - Inserir Shopping</h3><hr />
<?php
	$f->exibe();
?>
</body>
</html>
</html>