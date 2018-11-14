<?php

	$veiculo = array(
		'HB20' => array(
					'Motor' => '1.6',
					'Modelo' => 'Sedan',
					'Cor' => 'Prata',
					'Ano' => '2016'
				),
		'PUNTO' => array(
					'Motor' => '1.6',
					'Modelo' => 'Hatch',
					'Cor' => 'Vinho',
					'Ano' => '2014'					
				),
		'ONIX' => array(
					'Motor' => '1.0',
					'Modelo' => 'Sedan',
					'Cor' => 'Branco',
					'Ano' => '2016'	
				),
		'UNO' => array(
					'Motor' => '1.0',
					'Modelo' => 'Hatch',
					'Cor' => 'Cinza',
					'Ano' => '2013'	
		)

	);

	foreach ($veiculo as $key => $value) {
		 echo $key.': <br>'.PHP_EOL;

		foreach ($value as $caracteristicas => $caracteristica) {
			echo ' - 	'.$caracteristicas.' => '.$caracteristica."<br>".PHP_EOL;
		}

		echo "<hr><br>\n";

	}

?>