<?php

	class Conta{

		private $data;

		public function __set($propriedade,$param){

			$this->data[$propriedade] = $param;

		}

		public function __get($propriedade){

			return $this->data;

		}

		public function __isset($propriedade){

			return isset($this->data[$propriedade]);

		}

		public function __unset($propriedade){

			unset($this->data[$propriedade]);

		}

		public function __toString(){

			return json_encode($this->data);

		}

		public function __clone(){

			if(isset($this->data['conta'])){
				$this->data['conta'] = NULL;
			}

		}

		public function __call($metodo, $values){

			print "O método '$metodo' não existe. Consulte o manual da aplicação";

		}

	}

?>