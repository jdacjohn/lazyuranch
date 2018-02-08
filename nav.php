<!-- Nav Bar Content for www.lazyuranch.com -->
<?php
	$currentFile = $_SERVER["SCRIPT_NAME"];
	$parts = Explode('/',$currentFile);
	$currentFile = $parts[count($parts) - 2];
	//print('Current File = ' . $currentFile . '<br />');
	print('<div id="nav">');
	print('<ul id="nav2">');
	
		print('<li><a href="' . $siteRoot . '"'); 
		if ($currentFile == 'testSite') { print(' style="color:#D57F28"'); }
		print('>Welcome</a></li>');


		print('<li><a href="' . $siteRoot . '/lodging"');
		if (($currentFile == 'lodging') || ($currentFile == 'rates') || ($currentFile == 'theLodge') || ($currentFile == 'theRanch')
				|| ($currentFile == 'riosbbq') || ($currentFile == 'dancehall')) { 
			print(' style="color:#d57f28"'); 
		}
		print('>Lodging</a>');
?>
      <ul>
        <li><a href="<?php print($siteRoot); ?>/lodging/theLodge">The Lodge</a></li>
        <li><a href="<?php print($siteRoot); ?>/lodging/riosbbq">Rio's BBQ & Cantina</a></li>
        <li><a href="<?php print($siteRoot); ?>/lodging/dancehall">Jim's Dance Pavilion</a></li>
        <li><a href="<?php print($siteRoot); ?>/lodging/theRanch">Rent the Ranch</a></li>
        <li><a href="<?php print($siteRoot); ?>/lodging/rates">Rates &amp; Reservations</a></li>
      </ul>
		</li>
<?php
		print('<li><a href="' . $siteRoot . '/geninfo"');
		if (($currentFile == 'geninfo') || ($currentFile == 'policies') || ($currentFile == 'history') || ($currentFile == 'links')) { 
			print(' style="color:#d57f28"'); 
		}		
		print('>General Info</a>');
?>
			<ul>
        <li><a href="<?php print($siteRoot); ?>/geninfo">Mission Statement</a></li>
        <li><a href="<?php print($siteRoot); ?>/geninfo/history">History</a></li>
        <li><a href="<?php print($siteRoot); ?>/geninfo/links">Associations</a></li>
        <li><a href="<?php print($siteRoot); ?>/agreement/Policy.pdf" target="_blank">Policy Agreement</a></li>
        <li><a href="<?php print($siteRoot); ?>/geninfo/policies">Policies</a>
<!--        	<ul>
          	<li><a href="<?php print($siteRoot); ?>/geninfo/policies/#rules">Rules &amp; Regulations</a></li>
            <li><a href="<?php print($siteRoot); ?>/geninfo/policies/#guests" class="info_link">Guest Information</a></li>
            <li><a href="<?php print($siteRoot); ?>/geninfo/policies/#property" class="info_link">Property Rules</a></li>
          </ul> -->
        </li>
			</ul>
		</li>

<?php
		print('<li><a href="' . $siteRoot . '/activities"');
		if (($currentFile == 'activities') || ($currentFile == 'area-attractions') || ($currentFile == 'nature-photography')
				|| ($currentFile == 'cooking') || ($currentFile == 'july4th')) { 
			print(' style="color:#d57f28"'); 
		}		
		print('>Activities</a>');
?>
			<ul>
        <li><a href="<?php print($siteRoot); ?>/activities/area-attractions">Area Attractions</a></li>
        <li><a href="<?php print($siteRoot); ?>/activities/cooking">Cooking & Libations</a></li>
        <li><a href="<?php print($siteRoot); ?>/activities/nature-photography">Nature Photography</a></li>
        <li><a href="<?php print($siteRoot); ?>/activities/july4th">4th of July</a></li>
			</ul>
		</li>

<?php
		print('<li><a href="' . $siteRoot . '/location"');
		if ($currentFile == 'location') { print(' style="color:#d57f28"'); }		
		print('>Location</a>');

		print('<li><a href="' . $siteRoot . '/contact"');
		if ($currentFile == 'contact') { print(' style="color:#d57f28"'); }		
		print('>Contact Us</a>');
?>

	</ul>
	
</div>
