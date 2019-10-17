<?php
    include("classeLayout/classeCabecalhoHTML.php");
    include("cabecalho.php");
    include("conexao.php");

    if(!empty($_POST)){
        include("classeControlerBD.php");
        $c = new ControllerBD($conexao);
        $c->inserir("location: Form_$tabela.php");
    }
    else{
        $tabela = $_GET["tabela"];
        header("location: Form_$tabela.php");
    }
?>