<?php

class logTemporario {

	public static $instance;

	private function __construct(){

		//

	} 

	public static function getInstance(){

		if (!isset(self::$instance)) {
			
			self::$instance = date('d/m/Y  H:i:s' );

		}

		return self::$instance;

	}


}

$l1 = logTemporario::getInstance();
$l2 = logTemporario::getInstance();

var_dump($l1);
var_dump($l2);

?>
