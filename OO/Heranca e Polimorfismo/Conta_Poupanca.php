<?php
	
	require_once 'Conta.php';

	class ContaPoupanca extends Conta {	//classe criada herdara atributos e metodos da classe Pai

		public function retirar($quantia){

			if( $this->saldo >= $quantia) {

				$this->saldo -= $quantia;
				//$this->saldo = $this->saldo - $quantia;

			} else {

				return false;	//	retirada não permitida

			}

			return true; //	retirada permitida
		}

	}

?>