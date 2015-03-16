<?php

class VEHICULO{

	public $enceder = false;
	public $apagar = true;
	public $cinturonSeguridad = false;
	private $llave = "123456";
	public $encederParabrisa ;
	public $encenderLuces;
	public $recargarGasolina = 0 ;

	/**
		*Recarga Gasolina devuelve un valor Null
		*para no Generar Error Php por pantalla
		*cuando no está definido
		*y retorna un valor
	**/
	public function recargarGasolina($Cargar = null){
		$Cargar;
		$this->recargarGasolina = $Cargar;
		echo "Monto Recargado ". $Cargar."</br>";

		return $this->recargarGasolina;
	}

	public function cinturonSeguridad($cinturon = null){
		$this->cinturonSeguridad = $cinturon;
		return $this->cinturonSeguridad;
	}

	public function encender($clave){

		if ($this->llave == $clave) {
				echo "Clave Correcta"."</br>";

				if ($this->recargarGasolina > 0) {
					echo "Tanque lleno"."</br>";

					if ($this->cinturonSeguridad == true) {
							//$this->cinturonSeguridad = null;
							echo "Cinturon Colocado"."</br>";
							echo "Vehiculo Encendido"."</br>";
							return $this->encender = true;
					} else {
							echo "Por favor colocarse el Cinturon";
					}

				}else {
					echo "<br>"."Tanque vacido, debe recargar"."</br>";
				}
		}else{
			echo "Llave incorrrecta, Introducir de Nuevo la Llave";
		}
	}

	public function apagar(){
		$this->encender = null;
		if ($this->encender == true){

				/*$this->apagar == false;*/
				echo "<br>"."Vehiculo Se Apag&oacute;"."</br>";
				return $this->encender = false;

		}else {
				echo "<br>"."Vehiculo Apagado";
			}
	}

	public function vehiculoEnMarcha(){
		//$this->encender = null;
		if ($this->encender == false) {
				echo "<br>"."Vehiculo Detenido"."<br>";

		}else {
			echo "<br>"."Vehiculo en MArcha"."<br>";
		}

	}

	public function encederParabrisa(){
		if ($this->encender == true){
				echo "<br>"."Encendiendo Limpia Parabrisa;"."</br>";

		}else {
				echo "<br>"."Vehiculo Apagado, No se Puede Encender Parabrisa";
			}
	}

/*	public function __set(){
			echo "No definido";
	}

		public function __call(){
			echo "No definido";
	}
*/
}

class CAMION extends VEHICULO{
		public $nombre = "";
		public $modelo = "";
		private $pasajeros = 0;

    public function pasajeros($cantidadPersona){
        $this->pasajeros = $cantidadPersona;
        echo 'Se han subido '.$cantidadPersona.' pasajeros <br />';
    }

		public function __construct($nombre, $modelo){
			$this->nombre = $nombre;
			$this->modelo = $modelo;
		}

		public function monstrarDatos(){
			echo $this->nombre."<br> "."Modelo del Veh&iacute;culo: ".$this->modelo."</br>";
		}

		public function __destruct(){

			$this->nombre;
			$this->modelo;
		}

}


$auto = new CAMION('Andres', 'AUTOBUS');

$auto->encender(123456);

/**
	$auto->monstrarDatos();
	$auto->recargarGasolina(100);
	$auto->cinturonSeguridad(1);
	$auto->encender(123456);
	$auto->apagar();
	$auto->vehiculoEnMarcha();
	$auto->encender(123456);
	$auto->pasajeros(15);

	$auto->vehiculoEnMarcha();
	$auto->encederParabrisa();
**/


?>
