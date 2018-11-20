<?php

	class Log{

		private static $instance;

		public static function getInstance(){

			if (self::$instance === null ) {
				self::$instance = new self;
			}

			return self::$instance;

		}

	}


	$p1 = Log::getInstance();
	$p4 = Log::getInstance();
	$p3 = Log::getInstance();
	$p2 = Log::getInstance();

	var_dump($p1);
	var_dump($p2);
	var_dump($p3);
	var_dump($p4);

?>