<?php
include "config.php";
$conexion=new mysqli($DBHOST,$DBUSER,$DBPASS,$DBBASE);
if(!$conexion){
  echo"erro de conectarse ala base de datos";
}