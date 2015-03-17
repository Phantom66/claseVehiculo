<?php

class VEHICULO{

  protected $enceder;
  protected $cinturon;
  protected $parabrisa;
  protected $luces;
  protected $gasolina;
  protected $llave;

  /**
   * Funciones magicas
   */

  /**
   * @param mixed la "llave" para encender el vehiculo
   */
  public function __construct($llave = null){
    $this->enceder   = false;
    $this->cinturon  = false;
    $this->parabrisa = false;
    $this->luces     = false;
    $this->gasolina  = 0;
    $this->llave     = $llave;
  }

  public function __set($atributo, $valor){
    echo "El atributo {$atributo} ahora posee {$valor}!</br>";
    $this->$atributo = $valor;
  }

  public function __get($valor){
    echo "El {$valor}, fue accesado!</br>";
  }

  public function __call($metodo, $datos){
    echo "El metodo {$metodo} fue invocado con {$datos}!</br>";
    foreach($datos as $dato => $valor){
      echo "El metodo {$metodo} fue invocado con {$dato} {$valor}!</br>";
    }
  }

  /**
   * Recarga Gasolina devuelve un valor Null
   * para no Generar Error Php por pantalla
   * cuando no está definido
   * y retorna un valor
   *
   * @param int el monto a recargar
   */
  public function recargarGasolina($monto = null){

    if(is_numeric($monto) && $monto > 0){
      $this->gasolina = $monto;
      echo "Monto Recargado con valor {$monto}.</br>";
    }else{
      echo "valor {$monto} es invalido para recargar gasolina.</br>";
      return null;
    }

    return $this->gasolina;
  }

  /**
   * Metodo que sirve para poner o quitar cinturon.
   */
  public function cinturonSeguridad(){
    return $this->cinturonSwiche();
  }

  /**
   * chequea si la llave es correcta y tambien chequea
   * si la gasolina, cinturon estan validos

   * @param mixed la "llave" a comparar.
   */
  public function encender($clave){

    if($this->llave === NULL) echo 'Este Vehiculo no posee llave!</br>'; return false;
    if($this->encender) echo 'Este Vehiculo ya esta encendido.</br>'; return false;

    if ($this->llave == $clave) {
        echo "Clave Correcta.</br>";
        if ($this->chequearGasolina()) {
          echo "Tanque de Gasolina no esta vacio!</br>";
          if ($this->chequearCinturon()) {
            echo "Cinturon Colocado.</br>";
            echo "Vehiculo Encendido.</br>";
            return $this->encender = true;
          } else {
            echo "Por favor colocarse el Cinturon.</br>";
          }
        }else {
          echo "<br>Tanque de gasolina vacio, debe recargar.</br>";
        }
    }else{
      echo "Llave incorrrecta, Introducir de Nuevo la Llave";
    }
  }

  public function apagar(){
    if ($this->encender == true){
      echo "Vehiculo Se Apag&oacute;";
      return $this->encender = false;
    }else {
      echo "Vehiculo ya se encuentra Apagado";
    }
  }

  public function vehiculoEnMarcha(){
    if ($this->encender == false) {
      echo "<br>Vehiculo ya esta Detenido<br>";
    }else {
      echo "<br>Vehiculo en Marcha<br>";
    }
  }

  public function encederParabrisa(){
    if ($this->encender == true){
        echo "Encendiendo Limpia Parabrisa</br>";
        return $encederParabrisa = true;
    }else {
        echo "Vehiculo Apagado, No se Puede Encender Parabrisa";
      }
  }

  public function apagarParabrisa(){
    if ($this->encender == true){
        echo "<br>Encendiendo Limpia Parabrisa</br>";
        return $encederParabrisa = false;
    }else {
        echo "<br>Vehiculo Apagado, No se Puede Apagar Parabrisa</br>";
      }
  }

  /**
   * FUNCIONES PROTEGIDAS
   */

  /**
   * chequea la gasolina en la clase.
   *
   * @return boolean
   */
  protected function chequearGasolina(){
    if($this->gasolina <= 0){
      $this->gasolina = 0;
      return false;
    }else{
      return true;
    }
  }

  protected function cinturonSwiche(){
    if( isset($this->cinturon) ){
      if($this->cinturon){
        return $this->cinturon = false;
      }
      return $this->cinturon = true;
    }else{
      $this->cinturon = false;
    }
  }

  protected function chequearCinturon(){
    if($this->cinturon) return true;
    return false;
  }

  protected function iterarAtributos(){
    foreach($this as $atributo => $valor){
      if ($valor) {
        echo "{$atributo} activo: {$valor}<br>";
      }else{
        echo "{$atributo} inactivo<br>";
      }
    }
    return true;
  }
}

class CAMION extends VEHICULO{
  protected $nombre;
  protected $modelo;
  private $pasajeros = 0;

  public function __construct($nombre, $modelo){
    parent::__construct();
    $this->nombre = $nombre;
    $this->modelo = $modelo;
  }

  public function pasajeros($cantidadPersona){
    if(is_numeric($cantidadPersona)){
      $this->pasajeros += $cantidadPersona;
      echo 'Se han subido '.$cantidadPersona.' pasajeros <br />';
    }else{
      echo "Datos {$cantidadPersona} son incorrectos para subir pasajeros.";
    }
  }

  public function monstrarDatos(){
    $this->iterarAtributos();
    echo $this->nombre."<br> "."Modelo del Veh&iacute;culo: ".$this->modelo."</br>";
    echo "Existe en este {$this->modelo} {$this->pasajeros} pasajeros. <br>";
  }

  public function __destruct(){
    $this->nombre;
    $this->modelo;
    $this->pasajeros;
  }

}
?>
