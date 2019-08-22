<?php

// [username], [password], //[hostname]:[port]/[DB service name]
$c = oci_pconnect("montree", "password", "//10.164.32.216:1521/XE");
$s = oci_parse($c, "SELECT 'Hello World!' FROM dual");
oci_execute($s);
$nrows = oci_fetch_all($s, $res);

echo "$nrows rows fetched<br>\n";
var_dump($res);

?>
