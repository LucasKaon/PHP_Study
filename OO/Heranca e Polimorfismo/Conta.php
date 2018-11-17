<?php

	class Conta{

		protected $agencia;
		protected $conta;
		protected $saldo;


		public function __construct($agencia, $conta, $saldo = 0){

			$this->agencia = $agencia;
			$this->conta = $conta;
			
			if ($saldo >= 0) {
				$this->saldo = $saldo;
			}
			

		}

		public function getInfo(){

			return 'Agência: '.$this->agencia.', Conta: '.$this->conta."<br>\n";

		}

		public function depositar($quantia){

			if($quantia > 0){
			
			$this->saldo += $quantia;
			// $this->saldo = $this->saldo + $quantia;

			}

		}

		public function getSaldo(){

			return $this->saldo;

		}


	}

?>