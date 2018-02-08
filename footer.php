<br />
<div id="footer">

<div class="footer-row">
	<!--- Left Side --->
  <div id="divFooter_left">
		<h1><strong>Lazy U</strong> Ranch Activities</h1>
		<ul>
			<li><a href="<?php print($siteRoot); ?>/activities/area-attractions/"><span> Area Attractions</span></a></li>
<!--			<li><a href="#"><span> Astronomy</span></a></li> -->
<!--			<li><a href="#"><span> Cycling</span></a></li> -->
<!--			<li><a href="#"><span> Hiking Trails</span></a></li>
			<li><a href="#"><span> Mountain Biking</span></a></li> -->
			<li><a href="<?php print($siteRoot); ?>/activities/nature-photography/"><span> Nature Photography</span></a></li>
			<li><a href="<?php print($siteRoot); ?>/lodging/theRanch/"><span> Rent the Ranch</span></a></li>
			<li><a href="http://www.themcelhinneywakeboardschool.com"><span> Wake Boarding</span></a></li>
		</ul>										

  </div> <!-- End DIV divFooter_left -->
  					
	<!-- Center -->
	<div id="divFooter_center">
		<h1><strong>Contact</strong> Lazy U Ranch</h1>
				<img alt="user" src="<?php print($siteRoot); ?>/images/footer/user.png" style="float: left; margin: 5px 15px 30px 0px"/>
				<p>450 Naumann Road<br />
				Sequin, Texas 78115<br />
        210.559.1377<br />
        <a href="mailto:riohondo@lazyuranch.com"><span style="text-decoration:underline">riohondo@lazyuranch.com</span></a></p>
  </div> <!-- End DIV divFooter_center -->

	<!-- Right -->					
	<div id="divFooter_right">
    <?php 
			if ($_REQUEST['eflag'] == 1) {
				print('<h1><strong>Thank You</strong></h1><br />');
				print('<p>Thank You For Joining our Mailing List. Be on the lookout for exciting news from Lazy U Ranch!</p>');
			} else {
				print('<h1><strong>Join</strong> our Mailing List!</h1>');
				print('<form method="post" id="form-newsletter" name="form-newsletter" enctype="application/x-www-form-urlencoded" action="' . $siteRoot . '/emailSignUp.php">');
				print('<form method="post" id="form-newsletter" name="form-newsletter" enctype="application/x-www-form-urlencoded" action="#">');
				print('<p>Drop us your email address and get up to date with our upcoming events and latest news from us.</p>');
				print('<input type="text" name="news_mail" id="news_mail" value="Your email address" size="20" maxlength="100" class="top-input" onBlur="if(this.value==\'\') this.value=\'Your email address\';" onFocus="if(this.value==\'Your email address\') this.value=\'\';" />');
				print('<input value="Submit" id="submit_mail" class="csbutton-dark" name="submit" type="submit" />');
				print('</form>');
			}
			if ($_REQUEST['eflag'] == 2) {
				print('<script type="text/javascript">alert("Please Enter a Valid Email Address.");</script>');
			}
		?>
  </div> <!-- End DIV divFooter_right -->

</div> <!-- End DIV footer-row -->

<div style="clear:both;"></div>

</div> <!-- End DIV footer -->
<div id="footer-overlay-bottom">
        <p class="page-footer">Copyright &copy; 2013 Lazy U Ranch. All Rights Reserved.</p>
				<span class="bottom-links">
        	<a href="#">&nbsp;</a>
					<a href="<?php print($siteRoot); ?>">Home</a>
					<a href="<?php print($siteRoot); ?>/lodging/rates/">Reservations</a>
					<a href="<?php print($siteRoot); ?>/contact/">Contact</a>
					<a href="<?php print($siteRoot); ?>/geninfo/">Mission Statement</a>
          <a href="<?php print($siteRoot); ?>/sitemap.php">Site Map</a>
				</span>
</div>


