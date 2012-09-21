<?php

header("Cache-Control: no-cache");

$con = mysql_connect("localhost", "783846_pgp", "ArcsMate42");
if (!$con) {
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("pagangirlpixels_zzl_updates", $con);

// SQL escape
$news = str_replace("'", "''", $_POST['news']);

// HTML escape
$news = str_replace(array("<",    ">"),
                    array("&lt;", "&gt;"),
                    $news);

$sql="INSERT INTO updates (date, Update)
VALUES (CURDATE(), '$news')";

$message = (!mysql_query($sql,$con)) ? 'Error: '.mysql_error() : '';
mysql_close($con);

if($message != '')
	die($message);

header("HTTP/1.0 303");
header("Location: index.php");
?> 
