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
   * [__construct]
   * @param mixed $llave la "llave" del vehiculo.
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
   * recarga el tanque de gasolina segun el valor.
   *
   * @internal (esto creo que esta solucionado) Recarga Gasolina
   * devuelve un valor Null para no Generar
   * Error Php por pantalla cuando no está definido
   * y retorna un valor
   *
   * @param integer $monto el monto a recargar
   *
   * @return boolean
   */
  public function recargarGasolina($monto = null){
    if($this->chequearValidezLlave()){
      if(is_numeric($monto) && $monto > 0){
        $this->gasolina = $monto;
        echo "Monto Recargado con valor {$monto}.</br>";
      }else{
        echo "valor {$monto} es invalido para recargar gasolina.</br>";
        return null;
      }
      return $this->gasolina;
    }
  }

  /**
   * Metodo que sirve para poner o quitar cinturon.
   *
   * @return $this->cinturonSwiche()
   */
  public function cinturonSeguridad(){
    if($this->chequearValidezLlave()){
      return $this->cinturonSwiche();
    }
  }

  /**
   * chequea si la llave es correcta y tambien chequea
   * si la gasolina, cinturon estan validos
   *
   * @param mixed la "llave" a comparar.
   */
  public function encender($clave){

    if($this->chequearValidezLlave()){
      if($this->encender){
        echo 'Este Vehiculo ya esta encendido.</br>';
        return false;
      }
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

  }

  /**
   * se chequea si el vehiculo esta prendido para apagarlo.
   * @return boolean
   */
  public function apagar(){
    if ($this->chequearValidezLlave()) {
      if ($this->encender){
        echo "Vehiculo Se Apag&oacute;";
        return $this->encender = false;
      }else {
        echo "Vehiculo ya se encuentra Apagado";
        return false;
      }
    }else{
      echo 'Su llave no es correcta, no se puede apagar vehiculo.<br>';
      return false;
    }
  }

  /**
   * pone el vehiculo en marcha
   * @return void
   */
  public function vehiculoEnMarcha(){
    if ($this->chequearValidezLlave()) {
      if ($this->encender == false) {
        echo "Vehiculo esta apagado, no se puede poner en marcha.<br>";
      }else {
        echo "Vehiculo en Marcha!<br>";
      }
    }
  }

  /**
   * chequea si el vehiculo esta encendido y prende el parabrisa.
   * @return boolean
   */
  public function encederParabrisa(){
    if($this->chequearValidezLlave()){
      if ($this->encender == true){
        echo "Encendiendo Limpia Parabrisa</br>";
        return $encederParabrisa = true;
      }else {
        echo "Vehiculo Apagado, No se Puede Encender Parabrisa";
        return false;
      }
    }
  }

  /**
   * chequea si el vehiculo esta encendido y apaga el parabrisa.
   * @return boolean
   */
  public function apagarParabrisa(){
    if($this->chequearValidezLlave()){
      if ($this->encender == true){
        echo "Apagado Limpia Parabrisa</br>";
        return $encederParabrisa = false;
      }else {
        echo "Vehiculo Apagado, No se Puede Apagar Parabrisa</br>";
        return false;
      }
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

  /**
   * funciona como switch para el cinturon de seguridad.
   *
   * @return boolean
   */
  protected function cinturonSwiche(){
    if( isset($this->cinturon) ){
      if($this->cinturon){
        echo 'cinturon desactivado.<br>';
        return $this->cinturon = false;
      }
      echo 'cinturon activado.<br>';
      return $this->cinturon = true;
    }else{
      $this->cinturon = false;
    }
  }

  /**
   * chequea si el cinturon esta puesto o no.
   *
   * @return boolean
   */
  protected function chequearCinturon(){
    if($this->cinturon) return true;
    return false;
  }

  /**
   * se chequea si la llave del vehiculo ya fue o no iniciada
   *
   * @return boolean
   */
  protected function chequearValidezLlave(){
    if($this->llave) return true;
    echo 'Este Vehiculo no posee llave!</br>';
    return false;
  }

  /**
   * se ven todos los atributos de la case y hace un simple echo
   *
   * @return boolean
   */
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

  /**
   * [__construct]
   * @param string $nombre  el nombre del vehiculo.
   * @param mixed  $modelo  el modelo.
   * @param mixed  $llave   la "llave" del vehiculo.
   */
  public function __construct($nombre, $modelo, $llave = null){
    parent::__construct($llave);
    $this->nombre = $nombre;
    $this->modelo = $modelo;
  }

  public function __destruct(){
    $this->nombre;
    $this->modelo;
    $this->pasajeros;
  }

  /**
   * sirve para añadir pasajeros al camion.
   *
   * @param integer $cantidadPersona el numero de personas a entrar o salir.
   * @return void
   */
  public function pasajeros($cantidadPersona = null){
    if ($this->chequearValidezLlave()) {
      if ($this->encender) {
        if(is_numeric($cantidadPersona)){
          $this->pasajeros += $cantidadPersona;
          echo 'Se han subido '.$cantidadPersona.' pasajeros <br />';
        }else{
          echo "Datos {$cantidadPersona} son incorrectos para subir pasajeros.";
        }
      }else{
        echo "Los pasajeros no pueden ingresar al vehiculo porque se encuentra apagado y no abren las puertas.<br>";
      }
    }
  }

  /**
   * imprime atributos de la instancia.
   * @return void
   */
  public function monstrarDatos(){
    $this->iterarAtributos();
    echo $this->nombre."<br> "."Modelo del Veh&iacute;culo: ".$this->modelo."</br>";
    echo "Existe en este {$this->modelo} {$this->pasajeros} pasajeros. <br>";
  }
}
