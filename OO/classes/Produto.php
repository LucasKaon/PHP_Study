<?php

	class Produto {

		private $descricao;
		private $estoque;
		private $preco;
		private $fabricante;
		private $caracteristicas;

		public function __construct($descricao, $estoque, $preco){

			$this->descricao = $descricao;
			$this->estoque = $estoque;
			$this->preco = $preco;

		}

		public function getDescricao(){

			return $this->descricao;

		}

		public function getFabricante(){

			return $this->fabricante;

		}

		public function setFabricante(Fabricante $f){		//declaro o Fabricante por fora, e o crio posteriormente dentro dessa classe
			$this->fabricante = $f;
		}

		public function addCaracteristica($nome, $valor){

			$this->caracteristicas[] = new Caracteristica($nome, $valor);

		}

		public function getCaracteristicas(){

			return $this->caracteristicas;

		}

	}


?>