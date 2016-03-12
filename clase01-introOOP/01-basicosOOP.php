<?php

// programación orientada a objetos

// distinguir entre clases y objetos

class UnaClase {

   // contenidos de la clase:  propiedades y métodos

   // una propiedad
   private $unDato = "valor default";

   // métodos
   // métodos para acceder a y modicar propiedades

   public function getDato() {
      return $this->unDato;
   }

   public function setDato( $nuevoValor ) {
      $this->unDato = $nuevoValor;
   }

}


// vamos a crear un objeto creando una instancia nueva de la clase

$objeto = new UnaClase();

$objeto -> setDato( "otro valor distinto" );

// echo $objeto -> getDato();






class Vehiculo {

   private $numPasajeros;
   private $velocidad;
   private $duenno;


   public function getNumPasajeros() {
      return $this->numPasajeros;
   }
   public function setNumPasajeros( $nuevoNum ) {
      $this->numPasajeros = $nuevoNum;
   }

   public function getVelocidad() {
      return $this->velocidad;
   }
   public function setVelocidad( $nuevaVel ) {
      $this->velocidad = $nuevaVel;
   }

   public function getDuenno() {
      return $this->duenno;
   }
   public function setDuenno( $nuevoDuenno ) {
      $this->duenno = $nuevoDuenno;
   }


}




$nuevoVehiculo = new Vehiculo();

   $nuevoVehiculo->setNumPasajeros(2);
   $nuevoVehiculo->setVelocidad(20);
   $nuevoVehiculo->setDuenno("Rafael Gutierrez");


$otroVehiculo = new Vehiculo();

   $otroVehiculo->setNumPasajeros(4);
   $otroVehiculo->setVelocidad(40);
   $otroVehiculo->setDuenno("Pedro Jimenez");


mostrarVehiculo( $nuevoVehiculo );
echo '<br>';
mostrarVehiculo( $otroVehiculo );


function mostrarVehiculo( $vehiculo ) {

      echo "Numero de Pasajeros: " .  $vehiculo -> getNumPasajeros() . '<br>';
      echo "Velocidad: " .  $vehiculo -> getVelocidad() . '<br>';
      echo "Duenno: " .  $vehiculo -> getDuenno() . '<br>';

}





for( $i = 0; $i<2000; $i++ ){
   $unVehiculo = new Vehiculo();
   $unVehiculo->setNumPasajeros( rand(1,4) );
   $unVehiculo->setVelocidad(rand(10,30));
   $unVehiculo->setDuenno( "Duenno " . $i );
   mostrarVehiculo( $unVehiculo );
   echo '<br>';
}
