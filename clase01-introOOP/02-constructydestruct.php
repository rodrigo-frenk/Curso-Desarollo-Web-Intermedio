<?php

class UnaClaseNueva {

   public function __construct()
   {
      echo "nueva instancia de " . __CLASS__;
   }

   public function __destruct()
   {
      echo '<br>';
      echo "borrar instancia de " . __CLASS__;
   }

}


$nuevaClase = new UnaClaseNueva();

echo '<br>';
echo "algo en medio....";
echo '<br>';


$nuevaClase = 0;



echo '<br>';
echo "algo despues....";
echo '<br>';
