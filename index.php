<?php ini_set('display_errors', 1); ?>
<?php require_once 'claseVehiculo.php' ?>
<html>
  <head>
    <title>Practica clases</title>
    <style media="screen">
      body{
        margin-top: 20px;
        font-family: sans-serif;
        font-size: 1.5em;
      }
      .info{
        width: 70%;
        margin: 0 auto;
      }
      .objeto1{
        background-color: #ceecff;
        padding: 10px;
      }

      .objeto2{
        background-color: #d1ffd8;
        padding: 10px;
      }

      .objeto3{
        background-color: #ffdcb7;
        padding: 10px;
      }
    </style>
  </head>
  <body>
    <div class="info objeto1">
      <pre>$auto = new CAMION('Andres', 'Autobus', 123456);</pre>
      <?php $auto = new CAMION('Andres', 'Autobus', 123456); ?>

      <pre>$auto->encender(123456);</pre>
      <p>
        <?php $auto->encender(123456); ?>
      </p>

      <pre>$auto->monstrarDatos();</pre>
      <p>
        <?php $auto->monstrarDatos(); ?>
      </p>

      <pre>$auto->RecargarGasolina(100);</pre>
      <p>
        <?php $auto->RecargarGasolina(100); ?>
      </p>

      <pre>$auto->cinturonSeguridad();</pre>
      <p>
        <?php $auto->cinturonSeguridad(); ?>
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

      <pre>$auto->apagarParabrisa();</pre>
      <p>
        <?php $auto->apagarParabrisa(); ?>
      </p>

      <pre>$auto->apagar();</pre>
      <p>
        <?php $auto->apagar(); ?>
      </p>
    </div>
    <div class="info objeto2">
      <pre>$auto = new CAMION('Bryan', 'Carrito de Helado');</pre>
      <p>
        <?php $auto = new CAMION('Bryan', 'Carrito de Helado'); ?>
      </p>

      <pre>$auto->encender(123123);</pre>
      <p>
        <?php $auto->encender(123123); ?>
      </p>

      <pre>$auto->monstrarDatos();</pre>
      <p>
        <?php $auto->monstrarDatos(); ?>
      </p>

      <pre>$auto->RecargarGasolina(111);</pre>
      <p>
        <?php $auto->RecargarGasolina(111); ?>
      </p>

      <pre>$auto->cinturonSeguridad();</pre>
      <p>
        <?php $auto->cinturonSeguridad(); ?>
      </p>

      <pre>$auto->vehiculoEnMarcha();</pre>
      <p>
        <?php $auto->vehiculoEnMarcha(); ?>
      </p>

      <pre>$auto->pasajeros();</pre>
      <p>
        <?php $auto->pasajeros(); ?>
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
      <pre>$auto = new CAMION('Alejandro', 'Metrobus', 444333222);</pre>
      <p>
        <?php $auto = new CAMION('Alejandro', 'Metrobus', 444333222); ?>
      </p>

      <pre>$auto->apagar();</pre>
      <p>
        <?php $auto->apagar(); ?>
      </p>

      <pre>$auto->vehiculoEnMarcha();</pre>
      <p>
        <?php $auto->vehiculoEnMarcha(); ?>
      </p>

      <pre>$auto->encender(111333222);</pre>
      <p>
        <?php $auto->encender(111333222); ?>
      </p>

      <pre>$auto->encender(444333222);</pre>
      <p>
        <?php $auto->encender(444333222); ?>
      </p>

      <pre>$auto->RecargarGasolina('a');</pre>
      <p>
        <?php $auto->RecargarGasolina('a'); ?>
      </p>

      <pre>$auto->RecargarGasolina(150);</pre>
      <p>
        <?php $auto->RecargarGasolina(150); ?>
      </p>

      <pre>$auto->cinturonSeguridad();</pre>
      <p>
        <?php $auto->cinturonSeguridad(); ?>
      </p>

      <pre>$auto->encender(444333222);</pre>
      <p>
        <?php $auto->encender(444333222); ?>
      </p>

      <pre>$auto->pasajeros('x');</pre>
      <p>
        <?php $auto->pasajeros('x'); ?>
      </p>

      <pre>$auto->encender(444333222);</pre>
      <p>
        <?php $auto->encender(444333222); ?>
      </p>

      <pre>$auto->apagar();</pre>
      <p>
        <?php $auto->apagar(); ?>
      </p>
    </div>
  </body>
</html>
