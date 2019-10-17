<?php
	include("classeLayout/classeCabecalhoHTML.php");
	include("cabecalho.php");
	include("classeLayout/classeTabela.php");
	include("conexao.php");
	include("classeControllerBD.php");
	
	$colunas = array("ID_Companhia as ID", "Companhia.Nome AS 'Nome '", "Cod_Cidade AS 'Codigo Cidade'", "Cidade.Nome AS 'Cidade'");
	
	$t[0][0] = "Companhia";
	$t[0][1] = "Cidade";
    $c = new ControllerBD($conexao);	
    $r = $c->selecionar($colunas,$t,null);
	
	while($linha = $r->fetch(PDO::FETCH_ASSOC)){
        $matriz[] = $linha;
        
    }
    
	$t = new Tabela($matriz,"Companhia");
	$t->exibe();
?>