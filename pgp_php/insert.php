<?php

header("Cache-Control: no-cache");

/*
 * Check for required fields.
 */
$error = "";
if(trim($_POST['comment']) == false)
	$error += "Comment required.<br/>";
if(trim($_POST['email']) == false)
	$error += "Email required.<br/>";
if($error != "") {
	// Nope!
	die('<h1>Error</h1><p>'.$error.'</p>');
}

$con = mysql_connect("localhost", "783846_comment", "comment");
if (!$con) {
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("pagangirlpixels_zzl_comments", $con);

// SQL escape
$name = str_replace("'", "''", $_POST['name']);
$email = str_replace("'", "''", $_POST['email']);
$website = str_replace("'", "''", $_POST['website']);
$comment = str_replace("'", "''", $_POST['comment']);

// HTML escape
$name = str_replace(array("<",    ">"),
                    array("&lt;", "&gt;"),
                    $name);
$email = str_replace(array("<",    ">"),
                     array("&lt;", "&gt;"),
                     $email);
$website = str_replace(array("<",    ">"),
                       array("&lt;", "&gt;"),
                       $website);
$comment = str_replace(array("<",    ">"),
                       array("&lt;", "&gt;"),
                       $comment);

$sql="INSERT INTO comments (Date, Name, Email_Address, Website, Comment)
VALUES (CURDATE(), '$name','$email','$website','$comment')";

$message = (!mysql_query($sql,$con)) ? 'Error: '.mysql_error() : '';
mysql_close($con);

if($message != '')
	die($message);

header("HTTP/1.0 303");
header("Location: index.php");
?> 
