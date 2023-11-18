<?php

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'sagartech');

$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
// Check connection
if (mysqli_connect_errno()) {
	http_response_code(400);
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<!-- 
define('DB_SERVER','localhost');
	define('DB_USER','sagartec_shuja');
	define('DB_PASS' ,'21);z%FKdcIq');
	define('DB_NAME', 'sagartec_sagartech'); -->