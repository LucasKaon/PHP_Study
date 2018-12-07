<?php 

	/*
	*
	SplFileInfo			=> obtenção de informações a respeito de determinado arquivo
	SplFileObject 		=> manipula arquivos. Extends de SPL_FILE_INFO.
	*
	*/

	$dados = array(

		array('codigo', 'produto', 'valor', 'volume'),
		array('1542', 'BRAHMA SK600', 69.40, 300),
		array('4586', 'PEPSI 1L', 25.80, 155),
		array('5156', 'SKYWOLFER', 45.50, 185)

	);

	$file = new SplFileObject('dados.csv','w');
	$file->setCsvControl(',');

	foreach ($dados as $linha) {
		$file->fputcsv($linha);
	}

?>