<?php

	require_once("funcoes.php");

	$file = 'diretorio_teste/file_exemplo_03.txt';
	$texto = ' Duis eleifend metus lectus. Mauris ultrices nisl eget consequat elementum.- 
	Aliquam erat volutpat. Nunc augue mauris, bibendum ut felis vel, imperdiet sodales leo. 
	Sed maximus velit et laoreet tempus.- 
	Proin elementum consequat metus, a porttitor elit fringilla at. Nunc in porta eros, quis luctus velit.- 
	Proin tempor, turpis in tempus ornare, nisi ligula sollicitudin nulla, quis pellentesque sapien diam id ante. Praesent consectetur nisl at diam viverra pulvinar.- 
	Proin pharetra turpis id nibh varius tincidunt. Proin maximus lacinia urna, eget lobortis justo tincidunt quis. Cras lacinia felis at purus commodo condimentum.- 
	Nunc viverra, quam et maximus fringilla, elit sem finibus sapien, quis elementum velit tortor et est.- 
	Ut maximus, metus sit amet semper vestibulum, lectus diam finibus sapien, et rhoncus mi nibh nec sapien.-';

	write_file($file, $texto);
	

?>