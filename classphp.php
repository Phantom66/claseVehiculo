<?php

	class PERSONA{
			private $nombre;

			public function __construct($name){
				$this->nombre = $name;
			}
			public function graficar(){
				echo  'Nombre es:'. $this->nombre.'<br>';
			}

	}

	class OPERACIONES{

		protected $valor1 = 0;
		protected $valor2 = 0;
		protected $resultado;

		public function operadores($a,$b){
			$this->valor1 = $a;
			$this->valor2 = $b;
		}
		public function mostrarResultado(){

			echo 'El Resultado es:'.$this->resultado.'<br>';
		}
	}

	class SUMA extends OPERACIONES{

		public function Operar(){

			$this->resultado = $this->valor1 + $this->valor2;
		}
	}

	class RESTA extends OPERACIONES{

		public function Operar(){

			$this->resultado = $this->valor1 - $this->valor2;
		}
	}

	class MULTIPLICAR extends OPERACIONES{

		public function Operar(){

			$this->resultado = $this->valor1 * $this->valor2;
		}
	}



?>
