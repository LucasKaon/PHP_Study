<?php

	class Produto {

		private $descricao;
		private $estoque;
		private $preco;


		public function set_Descricao($descricao){

			if (is_string($descricao)) {
				$this->descricao = $descricao;
			}

		}

		public function get_Descricao(){

			return $this->descricao;

		}

		public function set_Estoque($estoque){

			if (is_numeric($estoque) AND $estoque > 0) {
				$this->estoque = $estoque;
			}

		}

		public function get_Estoque(){

			return $this->estoque;

		}

		public function set_Preco($preco){

			if (is_numeric($preco) AND $preco > 0) {
				$this->preco = $preco;
			}

		}

		public function get_Preco(){

			return $this->preco;

		}

		public function reajustarPreco($percentual){

			if(is_numeric($percentual) AND $percentual > 0){

				$total = $this->preco + ($this->preco * ($percentual/100));

				$this->preco = $total;

			}

		}


	} //end class


	$p1 = new Produto('Chocolate',10,5);

	$p1->set_Descricao('Chocolate');
	$p1->set_Estoque(10);
	$p1->set_Preco(5.5);

	// $p1->reajustarPreco(15);

	echo $p1->get_Descricao()."<br>";
	echo $p1->get_Estoque()."<br>";
	echo $p1->get_Preco()."<br>";

?>