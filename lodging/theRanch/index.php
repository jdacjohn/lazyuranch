<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Lazy U Ranch Rent the Ranch</title>
	<?php include('../../pageHead.php'); ?>

	<!--- LightView Stuff --->
	<link rel='stylesheet' type='text/css' href='<?php print($siteRoot); ?>/css/lightview/lightview.css' />
	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js'></script>
	<!--[if lt IE 9]>
  	<script type="text/javascript" src="../../script/excanvas/excanvas.js"></script>
	<![endif]-->
	<script type="text/javascript" src="../../script/spinners/spinners.min.js"></script>
	<script type="text/javascript" src="../../script/lightview/lightview.js"></script>

	<script type='text/javascript'>
    Lightview.setDefaultSkin('light');
  </script>

</head>

<body>
<?php include_once("../../analytics.php"); ?>
<div id="Outer_wrap">
<div id="Wrap">
<?php
	include("../../header.php");
	include("../../nav.php");
	include("./slideshow.php");
?>
<div id="content-wrap">
<!--<div id="title_rent">Rent the Lazy U Ranch</div>-->
<div id="pageTitle">Rent the Lazy U Ranch</div>

<div id="div2c_rbLeft">
	<?php include("../../sidebar.php"); ?>
</div> <!--- End DIV div2c_rbLeft --->

<div id="div2c_rbRight">
	<h1>Rent the Ranch</h1>
	<p><br />The Lazy U Ranch is a full working ranch with about 60 acres in pasture and 40 acres wooded.</p>

	<p>.....traveling 1 mile from the front gate as you drop down into the Guadalupe river basin ending at the LODGE.  The LODGE is located 30 feet from the water’s edge with the Jim’s Dance Pavillion and Rio’s BBQ House and Cantina within 50 foot proximity of each other.  The entire area around the lodge is canopied with native Pecan and Cypress trees including 3 acres of one the finest carpet grass lawns in south Texas.</p>

	<p>..... offering   nature trails that wind throughout the property for 6 miles passing 4 natural watering tanks, through wooded areas and native grassland.</p>

	<p>The ranch is an excellent venue for private events such as church retreats, weddings, reunions, corporate retreats, etc.  All the facilities combine to provide exceptional logistics for groups as large as 1000 persons.</p>

	<p>The entire ranch can be rented for exclusive private use for additional fees – contact ranch manager for pricing.</p>
	<p><br />
  <h3>Gallery</h3>
  <?php include("gallery.php"); ?>
 	</p>

	<p>&nbsp;</p> 

</div> <!--- End DIV div2c_rbRight --->

</div> <!--- End DIV content-wrap --->
</div> <!--- End DIV Wrap --->
</div> <!--- End DIV Outer_wrap --->
<?php include("../../footer.php"); ?>	
</body>
</html>