<?php
ToroHook::add("404", function() {
	header('HTTP/1.0 404 Not Found');
	echo "Error";
});

Toro::serve(array(
    "/login" => "FGMembersite->Login()",
	"/registro" => "FGMembersite->RegisterUser()"
));
?>


