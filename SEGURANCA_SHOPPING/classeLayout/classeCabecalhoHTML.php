<?php
	class CabecalhoHTML{
		private $menu;
		public function exibe(){
			echo "<!DOCTYPE html>
				  <html>
				     <head>
						<meta charset='utf-8' />
					 </head>
					 <body>
					 <nav>
					 <b>Listar:</b> <br />
			";
			if($this->menu!=null){
				foreach($this->menu as $tabela=>$texto){
					echo "| <a href='listar_$tabela.php'>$texto</a> ";
				}
				echo "<br /><br />
					  <b>Cadastro:</b> <br />";
				foreach($this->menu as $tabela=>$texto){
					echo "| <a href='Form_$tabela.php'>$texto</a>";
				}
				
				echo "</nav>
				<hr />";
				}
		}
		public function add_menu($tabela){
			$this->menu = $tabela;
		}
	}
?>