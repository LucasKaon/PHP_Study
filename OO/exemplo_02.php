<?php

	class Produto {

		private $descricao;
		private $estoque;
		private $preco;

		public function __construct ($descricao, $estoque, $preco){

			if (is_string($descricao)) {
				$this->descricao = $descricao;
			}

			if (is_numeric($estoque) AND $estoque > 0) {
				$this->estoque = $estoque;
			}

			if (is_numeric($preco) AND $preco > 0) {
				$this->preco = $preco;
			}

			echo 'Objeto Cadastrado com SUCESSO';
		}

		public function __destruct(){
			echo "<hr>".'DESTRUIDO: Objeto -> '.$this->descricao.', Estoque -> '.$this->estoque.', Preco -> '.$this->preco;
		}


		public function get_Descricao(){

			return $this->descricao;

		}


		public function get_Estoque(){

			return $this->estoque;

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

	unset($p1);

?>