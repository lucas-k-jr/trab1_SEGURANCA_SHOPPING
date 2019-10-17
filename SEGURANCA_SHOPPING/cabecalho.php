<?php
	$c = new CabecalhoHTML();
	$v = array("Estado"=>"Estado","Cidade"=>"Cidade","Seguranca"=>"Seguranca","Companhia"=>"Companhia","Shopping"=>"Shopping","Seguranca_Companhia_Shopping"=>"Seguranca_Companhia_Shopping");
	$c->add_menu($v);
	$c->exibe();
?>