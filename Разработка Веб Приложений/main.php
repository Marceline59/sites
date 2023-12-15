<?php
$mysqli=new mysqli('localhost', 'root', 'mysql', 'setner');
$mysqli->set_charset('utf8');
if ($mysqli==false) {echo '<script type="text/javascript"> alert("Очень грустно")</script>';}

$sql3="select login, password from `admin`";
?>