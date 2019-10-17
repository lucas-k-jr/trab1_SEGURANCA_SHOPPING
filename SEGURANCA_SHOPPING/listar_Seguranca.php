<?php
	include("classeLayout/classeCabecalhoHTML.php");
	include("cabecalho.php");
	include("classeLayout/classeTabela.php");
	include("conexao.php");
	include("classeControllerBD.php");
	
	$colunas = array("ID_Seguranca as ID", "Seguranca.Nome AS 'Nome '","Sobrenome ","Sexo ","Email ","Data_Nascimento ","Cod_Cidade ","Cidade.Nome AS 'Cidade'");
	
	$t[0][0] = "Seguranca";
	$t[0][1] = "Cidade";
    $c = new ControllerBD($conexao);	
    $r = $c->selecionar($colunas,$t,null);
    
	while($linha = $r->fetch(PDO::FETCH_ASSOC)){
        $matriz[] = $linha;
        
    }
    
	$t = new Tabela($matriz,"Seguranca");
	$t->exibe();
?>