<?php 

	/*
	*
	SplFileInfo			=> obtenção de informações a respeito de determinado arquivo
	SplFileObject 		=> manipula arquivos. Extends de SPL_FILE_INFO.
	*
	*/

	$file = new SplFileObject('ex_02.php');

	print $file->getFileName().'<br>'.PHP_EOL;
	print $file->getExtension().'<br>'.PHP_EOL;

	$file2 = new SplFileObject('novo.txt','w');

	$bytes = $file2->fwrite('Hello World!!'.PHP_EOL);

	print 'Bytes escritos: '.$bytes.PHP_EOL;

?>