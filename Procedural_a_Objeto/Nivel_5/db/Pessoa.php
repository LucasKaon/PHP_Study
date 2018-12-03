<?php

	class Pessoa 
	{

		public static function save($pessoa){

			$conn = new PDO('mysql:host=127.0.0.1;port=3306;db_name=db_livro','root','');
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			if (empty($pessoa['id'])) 
			{
				$result = $conn->query("SELECT max(id) as next FROM pessoa");
				$row = $result->fetch();
				$pessoa['id'] = (int) $row['next']+1;

				$sql = "INSERT INTO pessoa (id, nome, endereco, bairro, 
									  telefone, email, id_cidade)
							VALUES('{$pessoa['id']}','{$pessoa['nome']}', '{$pessoa['endereco']}','{$pessoa['bairro']}', '{$pessoa['telefone']}','{$pessoa['email']}','{$pessoa['id_cidade']}')";
			} else 
			{
				$sql = "UPDATE pessoa SET nome 				= 		'{$pessoa['nome']}',
											endereco			=		'{$pessoa['endereco']}',
											bairro				=		'{$pessoa['bairro']}',
											telefone 			=		'{$pessoa['telefone']}',
											email 				=		'{$pessoa['email']}',
											id_cidade 			=		'{$pessoa['id_cidade']}'
										WHERE id 				=		'{$pessoa['id']}'";

			}

			return $conn->query($sql);
		}

		public static function find($id){

			$conn = new PDO('mysql:host=127.0.0.1;port=3306;db_name=db_livro','root','');
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$resultado = $conn->query("SELECT * FROM pessoa WHERE id = '{$id}'");
			return $resultado->fetch();

		}

		public static function excluir($id){

			$conn = new PDO('mysql:host=127.0.0.1;port=3306;db_name=db_livro','root','');
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "DELETE FROM pessoa WHERE id = '{$id}'";

			$resultado = $conn->query($sql);

			$conn = null;

			return $resultado;


		}

		public static function all(){

			$conn = new PDO('mysql:host=127.0.0.1;port=3306;db_name=db_livro','root','');
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql ="SELECT * FROM db_livro.pessoa ORDER BY id";

			$resultado = $conn->query($sql);
			return $resultado;

			$conn = null;
		}

	}

?>