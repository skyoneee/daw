<?php
$enlace =  mysql_connect("localhost", "root", "");
if (!$enlace) {
    die("No pudo conectarse: " . mysql_error());
}
echo "Conectado satisfactoriamente";

static $id=0;

$query=mysql_query('create database if not exists proyects',$enlace);
mysql_select_db("proyects",$enlace);

$proyects = 'CREATE TABLE newProyects (
  id_proy int(11) NOT NULL auto_increment,
  name_user varchar(255) NOT NULL,
  name_proy varchar(255) NOT NULL,
  type_proy varchar(255) NOT NULL,
  PRIMARY KEY  (id_proy)
)';
$cmovie=mysql_query($proyects,$enlace);

$insert="INSERT INTO proyects (id_proy, name_user, name_proy, type_proy)
      VALUES ('".$id."','admin','".$_GET['proy']."','".$_GET['temp']."')";
mysql_query($insert,$enlace);

$id++;
?>






