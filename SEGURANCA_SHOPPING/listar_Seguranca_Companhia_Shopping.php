<?php
	include("classeLayout/classeCabecalhoHTML.php");
	include("cabecalho.php");
	include("classeLayout/classeTabela.php");
	include("conexao.php");
	include("classeControllerBD.php");
	
	$colunas = array(   "id_Seguranca  as 'ID'", "Seguranca.Nome AS 'Nome do Seguranca'", "id_Companhia", "Companhia.Nome AS 'Nome da Companhia'", "id_Shopping ", "Shopping.Nome AS 'Nome do Shopping'",);
	
	$t[0][0] = "Seguranca_Companhia_Shopping";
	$t[0][1] = "Seguranca";
	$t[1][0] = "Seguranca_Companhia_Shopping";
	$t[1][1] = "Companhia";
	$t[2][0] = "Seguranca_Companhia_Shopping";
	$t[2][1] = "Shopping";
	$c = new ControllerBD($conexao);
	$r = $c->selecionar($colunas,$t,null);
	
	while($linha = $r->fetch(PDO::FETCH_ASSOC)){
		$matriz[] = $linha;
	}
	
	$t = new Tabela($matriz,"Seguranca_Companhia_Shopping");
	$t->exibe();
?>