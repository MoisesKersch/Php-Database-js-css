<?php
	include('array.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
<?php include('files.php');?> 
<title>My Page</title>
</head>
<body onload="getDateTime();">
<div id="interface">
  <div id="header">
    <header id="title">
      <h1><a>News First</a></h1>
    </header>
    
    <nav id="menu">
  		<?php include('/nav.php'); ?>
  		<span id="date"> </span>
	</nav>
  </div>