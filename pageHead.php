<?php
	$runMode = "PROD";
	$runMode = "DEV";
	$siteRoot = ".";
	if ($runMode == "DEV") {
		$siteRoot = "http://192.168.42.97/lazyuranch.com";
	} else {
		$siteRoot = "http://www.lazyuranch.com";
	}
?>
	<!-- Stylesheets and icons. -->
	<link href='http://fonts.googleapis.com/css?family=Habibi|Rufina:400,700|Donegal+One|Trocchi' rel='stylesheet' type='text/css'>	
	<link rel='stylesheet' type='text/css' href='<?php print($siteRoot); ?>/css/global.css' />
	<link rel='icon' href='<?php print($siteRoot); ?>/favicon.ico' type='image/x-icon' />
	<link rel='shortcut icon' href='<?php print($siteRoot); ?>/favicon.ico' type='image/x-icon' />

  <!-- Javascript/jQuery Includes. -->
	<script type='text/javascript' src='<?php print($siteRoot); ?>/script/jquery-1.8.3.min.js'></script> <!-- Current 12162012 -->
	<script type='text/javascript' src='<?php print($siteRoot); ?>/script/showHide.js'></script>
	<script type='text/javascript' src='<?php print($siteRoot); ?>/script/jquery.cycle.all.js'></script>
	<script type='text/javascript' src='<?php print($siteRoot); ?>/script/global.js'></script>

