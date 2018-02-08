<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Lazy U Ranch Lodging</title>
	<?php include('../pageHead.php'); ?>

</head>

<body>
<?php include_once("../analytics.php"); ?>
<div id="Outer_wrap">
<div id="Wrap">
<?php
	include("../header.php");
	include("../nav.php");
	include("../slideshow.php");
?>

<div id="content-wrap">
<!--<div id="title_lodging">Lazy U Ranch Lodging &amp; Accomodations</div>-->
<div id="pageTitle">Lazy U Ranch Lodging &amp; Accomodations</div>

<div id="div3c_left">
	<?php include('../amenities.php'); ?>
  <p><br />
  	<a href="<?php print($siteRoot); ?>/lodging/rates/" title="Lazy U Ranch Rates & Reservations"><img src="<?php print($siteRoot); ?>/images/reservations.png" width="306" height="47" border="0" /></a>
		<br />
  </a>
</div>

<div id="div3c_center">
	<h1>Jim's Dance Pavilion</h1>
  <a href="<?php print($siteRoot); ?>/lodging/dancehall/" title="Texas Dance Hall"><img src="<?php print($siteRoot); ?>/images/cantina.jpg" width="306" height="171" border="0" alt="Texas Dance Hall at the Lazy U Ranch" /></a>
  <h1>Rio's BBQ House & Cantina</h1>
  <a href="<?php print($siteRoot); ?>/lodging/riosbbq/" title="Rios BBQ House &amp; Cantina"><img src="<?php print($siteRoot); ?>/images/rios_cantina.jpg" width="306" height="171" border="0" alt="Rio's BBQ and Cantina at the Lazy U Lodge on the Guadalupe River" /></a>
</div>

<div id="div3c_right">
	<h1>The Lodge</h1>
  <a href="<?php print($siteRoot); ?>/lodging/theLodge/" title="The Lodge at Lazy U Ranch"><img src="<?php print($siteRoot); ?>/images/thelodge.jpg" width="306" height="171" border="0" alt="The Lodge at Lazy U Ranch on the Guadalupe River Seguin Texas" /></a>
	<h1>Rent the Ranch</h1>
  <a href="<?php print($siteRoot); ?>/lodging/theRanch/" title="Rent the Entire Lazy U Ranch"><img src="<?php print($siteRoot); ?>/images/rent_the_ranch-306w.jpg" width="306" height="171" border="0" alt="Rent the Lazy U Ranch on the Guadalupe River for your next corporate or church outing." /></a>
</div>

</div> <!--- End DIV Content Wrap --->

</div> <!--- End DIV Wrap --->
</div> <!--- End DIV Outer_wrap --->
<?php include("../footer.php"); ?>	
</body>
</html>