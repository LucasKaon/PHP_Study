<?php

	$contato = array();
	$contato['nome'] = 'Sylar';
	$contato['sobrenome'] = 'Adiantti';
	$contato['empresa'] = 'LM Computers';
	$contato['funcao'] = 'CEO';


	foreach ($contato as $key => $value) {
		echo $key.' : '.$value."<br>\n\n";
	}
	
?>