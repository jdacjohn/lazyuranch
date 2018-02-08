<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="Guests of Lazy U Ranch located on the Guadalupe River near Seguin Texas can enjoy activities ranging from history to art to museums to outdoor attractions." />
	<title>Lazy U Ranch Activities</title>
	<?php include('../pageHead.php'); ?>

	<!--- LightView Stuff --->
	<link rel='stylesheet' type='text/css' href='<?php print($siteRoot); ?>/css/lightview/lightview.css' />
	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js'></script>
	<!--[if lt IE 9]>
  	<script type="text/javascript" src="../script/excanvas/excanvas.js"></script>
	<![endif]-->
	<script type="text/javascript" src="../script/spinners/spinners.min.js"></script>
	<script type="text/javascript" src="../script/lightview/lightview.js"></script>

	<script type='text/javascript'>
    Lightview.setDefaultSkin('light');
  </script>

</head>

<body>
<?php include_once("../analytics.php"); ?>
<div id="Outer_wrap">
<div id="Wrap">
<?php
	include("../header.php");
	include("../nav.php");
	include("./slideshow.php");
?>

<div id="content-wrap">
<!--<div id="title_activities">Lazy U Ranch Activities</div>-->
<div id="pageTitle">Lazy U Ranch Activities</div>

<div id="div2c_rbLeft">
	<p><br />
  <?php include('gallery.php'); ?><br />
	</p>
	<h3 style="text-align:left">4th of July Memorial Services</h3>
	<a name="july4th"></a>
	<img class="bodyImgRight" src="../images/july_4.jpg" width="172" height="208" border="0" alt="Lazy U Ranch 2012 4th of July Memorial Service" />
  <p style="text-align:left">Click the links below to see our brochures for Lazy U Ranch 4th of July celebrations and memorial services.</p>
	<ul class="sideBarUL">
		<li><a href="<?php print($siteRoot); ?>/docs/2012_4th_July_reduced.pdf" target="_blank">July 4th Program</a></li>
		<li><a href="<?php print($siteRoot); ?>/docs/2012_4th_July_Services_reduced.pdf" target="_blank">July 4th Memorial Services</a></li>
	</ul>
  <p>&nbsp;</p>
</div> <!-- End DIV div2c_rbLeft -->

<div id="div2c_rbRight">
	<p>
  	<table>
    	<tr>
      	<td width="276"><a href="<?php print($siteRoot); ?>/activities/area-attractions/" title="Lazy U Ranch Area Attractions"><img class="bodyImgLeft" align="center" alt="Lazy U Ranch Area Attractions" src="<?php print($siteRoot); ?>/images/sidebar/attractions.jpg" width="276" height="207" border="0" /></a></td>
				<td width="276"><a href="<?php print($siteRoot); ?>/activities/nature-photography/" title="Lazy U Ranch Nature Photography"><img class="bodyImgLeft" align="center" alt="Lazy U Ranch Seguin Texas Nature Photography" src="<?php print($siteRoot); ?>/images/sidebar/nature_fffBorder.jpg" width="276" height="207" border="0" /></a></td>
			</tr>
      <tr>
      	<td><h3>Area Attractions</h3></td>
        <td><h3>Nature Photography</h3></td>
      </tr>
			<tr>
      	<td><a href="<?php print($siteRoot); ?>/activities/cooking/" title="Lazy U Ranch Cooking and Libations"><img class="bodyImgLeft" align="center" alt="Lazy U Ranch Cooking and Libations" src="<?php print($siteRoot); ?>/images/sidebar/cooking_libs.jpg" width="276" height="174" border="0" /></a></td>
				<td><a href="<?php print($siteRoot); ?>/activities/july4th/" title="Lazy U Ranch July 4th Celebrations"><img class="bodyImgLeft" align="center" alt="Lazy U Ranch July 4th Biennial Celebration" src="<?php print($siteRoot); ?>/images/sidebar/july4.jpg" width="276" height="207" border="0" /></a></td>
      </tr>
			<tr>
      	<td><h3>Cooking &amp; Libations</h3></td>
        <td><h3>July 4th at the Lazy U</h3></td>
      </tr>
    </table>
  </p>

</div> <!-- End DIV div2c_rbRight -->

</div> <!-- End DIV content-wrap -->

</div> <!--- End DIV Wrap --->
</div> <!--- End DIV Outer_Wrap --->
<?php include("../footer.php"); ?>	
</body>
</html>