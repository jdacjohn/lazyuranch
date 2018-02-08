<?php
	$currentFile = $_SERVER["SCRIPT_NAME"];
	$parts = Explode('/',$currentFile);
	$currentFile = $parts[count($parts) - 2];
	
	switch ($currentFile) {
		case 'lodging':
			print('<div id="header_Lodge">');
			break;
		case 'theLodge':
			print('<div id="header_Lodge">');
			break;
		case 'rates':
			print('<div id="header_Lodge">');
			break;
		case 'theRanch':
			print('<div id="header_Lodge">');
			break;
		case 'dancehall':
			print('<div id="header_Dance">');
			break;
		case 'riosbbq':
			print('<div id="header_Rio">');
			break;
		case 'geninfo':
			print('<div id="header_GI">');
			break;
		case 'activities':
			print('<div id="header_A">');
			break;
		case 'area-attractions':
			print('<div id="header_A">');
			break;
		case 'cooking':
			print('<div id="header_Cook">');
			break;
		case 'july4th':
			print('<div id="header_74">');
			break;
		case 'location':
			print('<div id="header_Loc">');
			break;
		default:
			print('<div id="header">');
	}
?>
</div>
