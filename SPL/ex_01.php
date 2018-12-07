<?php 

	/*
	*
	SPL_FILE_INFO 		=> obtenção de informações a respeito de determinado arquivo
	SPL_FileObject 		=> manipula arquivos. Extends de SPL_FILE_INFO.
	*
	*/

	$spl = new SplFileInfo('ex_01.php');

	echo 'File name: '.$spl->getFileName().'<br>'.PHP_EOL;
	echo 'Size: '.$spl->getSize().'<br>'.PHP_EOL;
	echo 'Adress: '.$spl->getRealPath().'<br>'.PHP_EOL;
	echo 'Extension: '.$spl->getExtension();

 ?>