<?php

class VEHICULO{

  private $enceder;
  private $cinturon;
  private $parabrisa;
  private $luces;
  private $gasolina;
  private $llave = "123456";

  /**
   * Funciones magicas
   */
  public function __get($valor){
    echo "El Atributo {$valor}, no existe!</br>";
  }

  public function __call($metodo, $paramentro){
    echo "El metodo {$metodo} o el parametro {$paramentro} no existen!</br>";
  }

  /**
   * Recarga Gasolina devuelve un valor Null
   * para no Generar Error Php por pantalla
   * cuando no está definido
   * y retorna un valor
   */
  public function recargarGasolina($monto = null){

    if(ctype_digit($monto) and $monto > 0){
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

  public function encender($clave){

    if($this->encender) return 'Este Vehiculo ya esta encendido';

    if ($this->llave == $clave) {
        echo "Clave Correcta</br>";

        if ($this->chequearGasolina()) {
          echo "Tanque lleno</br>";

          if ($this->cinturonSeguridad == true) {
              //$this->cinturonSeguridad = null;
              echo "Cinturon Colocado</br>";
              echo "Vehiculo Encendido</br>";
              return $this->encender = true;
          } else {
              echo "Por favor colocarse el Cinturon";
          }

        }else {
          echo "<br>Tanque vacio, debe recargar</br>";
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
    //$this->encender = null;
    if ($this->encender == false) {
        echo "<br>"."Vehiculo ya esta Detenido"."<br>";

    }else {
      echo "<br>"."Vehiculo en Marcha"."<br>";
    }

  }

  public function encederParabrisa(){
    if ($this->encender == true){
        echo "<br>"."Encendiendo Limpia Parabrisa;"."</br>";
        return $encederParabrisa = true;
    }else {
        echo "<br>"."Vehiculo Apagado, No se Puede Encender Parabrisa";
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
    
  }
}

class CAMION extends VEHICULO{
    protected $nombre;
    protected $modelo;
    private $pasajeros = 0;

    public function __construct($nombre, $modelo){
      $this->nombre = $nombre;
      $this->modelo = $modelo;
    }

    public function pasajeros($cantidadPersona){
      if(ctype_digit($Cargar)){
        $this->pasajeros += $cantidadPersona;
        echo 'Se han subido '.$cantidadPersona.' pasajeros <br />';
      }else{
        echo 'Datos incorrectos para subir pasajero';
      }
    }

    public function monstrarDatos(){
      echo $this->nombre."<br> "."Modelo del Veh&iacute;culo: ".$this->modelo."</br>";
      echo "Existe en este {$this->modelo} {$this->pasajeros} pasajeros. <br>";
    }

    public function __destruct(){

      $this->nombre;
      $this->modelo;
      $this->$pasajeros;
    }

}
?>

<html>
  <head>
    <title>Practica clases</title>
  </head>
  <body>
    <div class="info objeto1">
      <pre>$auto = new CAMION('Andres', 'Autobus');</pre>
      <?php $auto = new CAMION('Andres', 'Autobus'); ?>

      <pre>$auto->apagar();</pre>
      <p>
        <?php $auto->apagar(); ?>
      </p>

      <pre>$auto->encender(123456);</pre>
      <p>
        <?php $auto->encender(123456); ?>
      </p>

      <pre>$auto->apagar();</pre>
      <p>
        <?php $auto->apagar(); ?>
      </p>

      <pre>$auto->monstrarDatos();</pre>
      <p>
        <?php $auto->monstrarDatos(); ?>
      </p>

      <pre>$auto->RecargarGasolina(100);</pre>
      <p>
        <?php $auto->RecargarGasolina(100); ?>
      </p>

      <pre>$auto->cinturonSeguridad(1);</pre>
      <p>
        <?php $auto->cinturonSeguridad(1); ?>
      </p>

      <pre>$auto->encender(123456);</pre>
      <p>
        <?php $auto->encender(123456); ?>
      </p>

      <pre>$auto->apagar();</pre>
      <p>
        <?php $auto->apagar(); ?>
      </p>

      <pre>$auto->vehiculoEnMarcha();</pre>
      <p>
        <?php $auto->vehiculoEnMarcha(); ?>
      </p>

      <pre>$auto->encender(123456);</pre>
      <p>
        <?php $auto->encender(123456); ?>
      </p>

      <pre>$auto->pasajeros(15);</pre>
      <p>
        <?php $auto->pasajeros(15); ?>
      </p>

      <pre>$auto->vehiculoEnMarcha();</pre>
      <p>
        <?php $auto->vehiculoEnMarcha(); ?>
      </p>

      <pre>$auto->encederParabrisa();</pre>
      <p>
        <?php $auto->encederParabrisa(); ?>
      </p>
    </div>
    <div class="info objeto2">
      <pre>$auto = new CAMION('Bryan', 'Carrito de Helado');</pre>
      <p>
        <?php $auto = new CAMION('Bryan', 'Carrito de Helado'); ?>
      </p>

      <pre>$auto->encender(321231);</pre>
      <p>
        <?php $auto->encender(321231); ?>
      </p>

      <pre>$auto->monstrarDatos();</pre>
      <p>
        <?php $auto->monstrarDatos(); ?>
      </p>

      <pre>$auto->RecargarGasolina('a');</pre>
      <p>
        <?php $auto->RecargarGasolina('a'); ?>
      </p>

      <pre>$auto->cinturonSeguridad(0);</pre>
      <p>
        <?php $auto->cinturonSeguridad(0); ?>
      </p>

      <pre>$auto->vehiculoEnMarcha();</pre>
      <p>
        <?php $auto->vehiculoEnMarcha(); ?>
      </p>

      <pre>$auto->pasajeros('x');</pre>
      <p>
        <?php $auto->pasajeros('x'); ?>
      </p>

      <pre>$auto->encederParabrisa();</pre>
      <p>
        <?php $auto->encederParabrisa(); ?>
      </p>

      <pre>$auto->apagarParabrisa();</pre>
      <p>
        <?php $auto->apagarParabrisa(); ?>
      </p>
    </div>
    <div class="info objeto3">
      <pre>$auto = new CAMION('Bryan', 'Metrobus');</pre>
      <p>
        <?php $auto = new CAMION('Alejandro', 'Metrobus'); ?>
      </p>

      <pre>$auto->encender(123456);</pre>
      <p>
        <?php $auto->encender(123456); ?>
      </p>

      <pre>$auto->monstrarDatos();</pre>
      <p>
        <?php $auto->monstrarDatos(); ?>
      </p>

      <pre>$auto->RecargarGasolina('a');</pre>
      <p>
        <?php $auto->RecargarGasolina('a'); ?>
      </p>

      <pre>$auto->cinturonSeguridad(0);</pre>
      <p>
        <?php $auto->cinturonSeguridad(0); ?>
      </p>

      <pre>$auto->vehiculoEnMarcha();</pre>
      <p>
        <?php $auto->vehiculoEnMarcha(); ?>
      </p>

      <pre>$auto->pasajeros(15);</pre>
      <p>
        <?php $auto->pasajeros(15); ?>
      </p>

      <pre>$auto->encederParabrisa();</pre>
      <p>
        <?php $auto->encederParabrisa(); ?>
      </p>

      <pre>$auto->apagarParabrisa();</pre>
      <p>
        <?php $auto->apagarParabrisa(); ?>
      </p>
    </div>
  </body>
</html>
