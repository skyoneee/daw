<?php

require("../toro.php");
require_once("./servidor/loginRegister/membersite_config.php");

class log-in {
    function post() {
      $log= $fgmembersite->Login();
    }
}

ToroHook::add("404", function() {
            header('HTTP/1.0 404 Not Found');
            echo "Error";
        });

Toro::serve(array(
    "/login" => "log-in"
));
?>

