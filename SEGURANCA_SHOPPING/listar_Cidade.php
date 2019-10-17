<?php
	include("classeLayout/classeCabecalhoHTML.php");
	include("cabecalho.php");
	include("classeLayout/classeTabela.php");
	include("conexao.php");
	include("classeControllerBD.php");
	
	$colunas = array(   "ID_Cidade as ID","Cidade.Nome AS 'Nome da Cidade'","Cod_Estado AS 'Codigo do Estado'","Estado.Nome AS 'Nome do Estado'");
	
	$t[0][0] = "Cidade";
	$t[0][1] = "Estado";
    $c = new ControllerBD($conexao);	
    $r = $c->selecionar($colunas,$t,null);
	
	while($linha = $r->fetch(PDO::FETCH_ASSOC)){
        $matriz[] = $linha;
        
    }
    
	$t = new Tabela($matriz,"Cidade");
	$t->exibe();
?>