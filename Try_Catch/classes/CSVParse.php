<?php
	
	class CSVParse 
	{

		private $filename, $data, $header, $counter, $separator;

		public function __construct($filename,$separator = ','){

			$this->filename 	= 	$filename;
			$this->separator 	= 	$separator;
			$this->counter 		= 	1;

		}

		public function parse(){
			if(!file_exists($this->filename)){

				throw new FileNotFoundException("O arquivo ".$this->filename." não foi encontrado.");

			}

			if (!is_readable($this->filename)) {
				
				throw new PermissionException("O arquivo ".$this->filename." não pode ser lido.");
				

			}

			$this->data = file($this->filename);
			$this->header = str_getcsv($this->data[0], $this->separator);
		}

		public function fetch() {
			if (isset($this->data[$this->counter])) {
				$row = str_getcsv($this->data[$this->counter ++], $this->separator);
				foreach ($row as $key => $value) {
					$row[$this->header[$key]] = $value;
				}

				return $row;

			}
		}


	}

?>