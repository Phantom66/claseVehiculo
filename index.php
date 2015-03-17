<?php ini_set('display_errors', 1); ?>
<?php require_once 'claseVehiculo.php' ?>
<html>
  <head>
    <title>Practica clases</title>
  </head>
  <body>
    <div class="info objeto1">
      <pre>$auto = new CAMION('Andres', 'Autobus', '123456');</pre>
      <?php $auto = new CAMION('Andres', 'Autobus', '123456'); ?>
      <pre>$auto->apagar();</pre>
      <p>
        <?php $auto->apagar(); ?>
      </p>

      <pre>$auto->encender(123456);</pre>
      <p>
        <?php $auto->encender(123456); ?>
      </p>

      <?php //die(var_dump($auto)) ?>

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
      <pre>$auto = new CAMION('Alejandro', 'Metrobus');</pre>
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
