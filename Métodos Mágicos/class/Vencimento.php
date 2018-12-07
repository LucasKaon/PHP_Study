<?php

	class Vencimento{

		private $data;

		public function __get($propriedade){
			if ($propriedade == 'valor') {

				return $this->getValor();
			
			}else{

				return $this->data[$propriedade];
			
			}
		}

		public function getValor(){

			$old = new DateTime($this->data['dt_vencimento']);
			$now = new DateTime('now');

			if ($old > $now) {
				
				$interval = $old->diff($now);
				$days = $interval->days;
				return $this->data['valor'] + $this->data['multa'] + ($this->data['valor'] * $this->data['juros'] * $days);

			} else{
				return $this->data['valor'];
			}

		}

		public function __set($propriedade, $valor){
			if ($propriedade == 'dt_vencimento') {
				$this->setVencimento($valor);
			} else {

				$this->data[$propriedade] = $valor;

			}
		}

		public function setVencimento($vencimento){

			$partes = explode('-', $vencimento);
			if (count($partes) == 3) {
				if (checkdate($partes[1], $partes[2], $partes[0])) {
					$this->data['dt_vencimento'] = $vencimento;
				} else {
					throw new Exception("Data '$vencimento' inválida");
					
				}
			}

		}


	}


?>