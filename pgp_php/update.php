<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Pagan Girl Pixels is a website for my personal pixel dolls" />
	<meta name="keywords" content="Pixel, Doll, Dollz, K.I.S.S., Dollmaker, Maker" />
	<meta name="author" content="J. Marie Daake" />
	<link rel="stylesheet" type="text/css" href="site.css" media="screen" />
	<title>Pagan Girl Pixels</title>
</head>

<body>
<!-- Begin Wrapper -->
	<div id="wrapper">
		<?php include('includes/header.php'); ?>
		<div class="book">
			<div class="left">
				<?php include('includes/nav.php'); ?>
			
			</div>
			<div class="right">
		<!-- start content -->
			<form id="news" name="news" method="post" action="insertUpdate.php">
			News Entry <input type="text" name="news" id="news" />
			<br class="clear" /> 
			<input type="submit"/>
			</form>			
		<!-- end content -->
			</div>
		</div>
		<?php include('includes/footer.php'); ?>
	</div> 
<!-- End #wrapper -->
</body>
</html>

<html>
<body>

<form action="insert.php" method="post">
Firstname: <input type="text" name="firstname" />
Lastname: <input type="text" name="lastname" />
Age: <input type="text" name="age" />
<input type="submit" />
</form>

</body>
</html>