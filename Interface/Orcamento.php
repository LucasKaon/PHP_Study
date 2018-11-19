<?php


	class Orcamento
	{
			private $itens;

			public function addItens( interface_Orcavel $p, $quantidade){

				$this->itens[] = array($p, $quantidade);

			}

			public function calcularTotal(){

				$total = 0;

				foreach ($this->itens as $key => $value) {
					$total = $total + ($value[1] * $value[0]->getPreco());
					print 'Referencia: '.$key.' == Produto : '.$value[0]->getDescricao().' == Valor do Pedido : '.$value[1] * $value[0]->getPreco()."<br>\n";
				}

				return $total;

			}
	}
?>