<?php
require_once("loginRegister/lib/toro.php");

class addapp {
    function post() {
		$enlace =  mysql_connect("localhost", "root", "");
		$query=mysql_query('create database if not exists proyects',$enlace);
		mysql_select_db("proyects",$enlace);
		$proyects = 'CREATE TABLE nproyects (
		  id_proy int(11) NOT NULL auto_increment,
		  name_user varchar(255) NOT NULL,
		  name_proy varchar(255) NOT NULL,
		  type_proy varchar(255) NOT NULL,
		  PRIMARY KEY  (id_proy)
		)';
		mysql_query($proyects,$enlace);
		$insert="INSERT INTO nproyects (name_user, name_proy, type_proy)
		VALUES ('".$_POST['mail']."','".$_POST['name']."','".$_POST['temp']."')";
		mysql_query($insert,$enlace);
    }
}
class showapp {
    function post() {
		$enlace =  mysql_connect("localhost", "root", "");
		mysql_select_db("proyects",$enlace);
		$proyects = mysql_query('select * from nproyects where name_user="'.$_POST['mail'].'"',$enlace);
		$i=0;
		$allMyProyects= array();
		while ($row = mysql_fetch_array($proyects)) {
			$allMyProyects[$i] = $row['name_proy'];
			$i++;
		}
		echo json_encode($allMyProyects);
    }
}

ToroHook::add("404", function() {
            header('HTTP/1.0 404 Not Found');
            echo "Error";
        });

Toro::serve(array(
    "/proy" => "addapp",
	"/show" => "showapp"
));
?>

