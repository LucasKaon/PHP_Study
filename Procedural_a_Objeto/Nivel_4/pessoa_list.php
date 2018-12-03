<?php

	require_once 'db/pessoa_db.php';

	if (!empty($_GET['action']) AND $_GET['action'] == 'delete') {
		
		$id = (int) $_GET['id'];

		excluir_pessoa($id);

	}

	$pessoas = lista_pessoas();

	$items = '';

	 if ($pessoas) {
		foreach ($pessoas as $pessoa) {
			
		$item = file_get_contents('html/item.html');
		$item = str_replace('{id}', 		$pessoa['0'],				$item);
		$item = str_replace('{nome}', 		$pessoa['1'],			$item);
		$item = str_replace('{endereco}', 	$pessoa['2'],		$item);
		$item = str_replace('{bairro}', 	$pessoa['3'],			$item);
		$item = str_replace('{telefone}', 	$pessoa['4'],		$item);

		$items.=$item;

		}
	}

	$list = file_get_contents('html/list.html');
	$list = str_replace('{items}', $items, $list);
	print $list;

?>