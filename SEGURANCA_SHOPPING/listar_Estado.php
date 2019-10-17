<?php
	include("classeLayout/classeCabecalhoHTML.php");
	include("cabecalho.php");
	include("classeLayout/classeTabela.php");
	include("conexao.php");
	include("classeControllerBD.php");
	
	$colunas = array("ID_Estado as ID", "Nome AS 'Nome do Estado'");
	
	$t[0][0] = "Estado";
	$t[0][1] = null;
	$c = new ControllerBD($conexao);
    $r = $c->selecionar($colunas,$t,null);
    
	while($linha = $r->fetch(PDO::FETCH_ASSOC)){
		$matriz[] = $linha;
	}
    
	$t = new Tabela($matriz,"Estado");
	$t->exibe();
?>