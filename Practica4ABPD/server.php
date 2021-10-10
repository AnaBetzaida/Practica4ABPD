<?php

     require_once "lib/nusoap.php";
     function getFrutas($frutas) {
          if ($frutas == "Frutas") {
	      return join(",", array(
              "Fresas",
              "Uvas",
              "Naranjas",
              "Toronjas",
              "Mango",
              "Manzana"));
          }
          else {
	              return "No hay frutas";
         
        }

     }

     $server = new soap_server(); //creamos instancia de soap
     $server->register("getFrutas"); //Indica el método o función a devolver
     if (!isset($HTTP_RAW_POST_DATA)) $HTTP_RAW_POST_DATA =file_get_contents( 'php://input');
     $server->service($HTTP_RAW_POST_DATA);

?>