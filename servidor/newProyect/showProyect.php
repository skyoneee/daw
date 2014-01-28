<?php
$enlace =  mysql_connect("localhost", "root", "");
if (!$enlace) {
    die("No pudo conectarse: " . mysql_error());
}
mysql_select_db("proyects",$enlace);
function show() {
	$query=mysql_query("select * from newProyects where name_user= 'admin'",$enlace);
	while ($row = mysql_fetch_array($query)) {
		$nProy=$row['name_proy'];	
		echo "<div class='col-ms-4'>".$nProy."</div>";
	}
}
?>
