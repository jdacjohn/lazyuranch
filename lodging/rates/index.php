<?php
session_start();

// Include the random string file for captcha
require('./ajaxform/includes/rand.php');

// Set the session contents
session_start();
$_SESSION['captcha_id'] = $str;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Lazy U Ranch Rates &amp; Reservations</title>
	<?php include('../../pageHead.php'); ?>

	<!-- jQuery DatePicker() includes. -->
	<link rel='stylesheet' type='text/css' href='<?php print($siteRoot); ?>/css/dark-hive/jquery-ui-1.9.2.custom.min.css' />
	<script type='text/javascript' src='<?php print($siteRoot); ?>/script/jquery-ui-1.9.2.custom.min.js'></script> <!-- Current 01042013 -->
  
	<!-- CAPTCHA Validation includes -->
	<script type="text/javascript" src="./ajaxform/js/validate.js"></script>
	<script type="text/javascript" src="./ajaxform/js/captcha.js"></script>
  
	<!-- FancyBox Stuff -->
 	<script type="text/javascript" src="../../script/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="../../script/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="../../script/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

<script type="text/javascript">

  $(document).ready(function() {

		$("#various2").fancybox({
				'width'				: '75%',
				'height'			: '75%',
				'padding'			: '5px',
				'autoScale'			: false,
				'transitionIn'		: 'elastic',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});
	
		var validator = $("#resForm").validate({
		//ignore: ".ignore",
		rules: {
			captcha: {
				required: true,
				remote: "./ajaxform/includes/process.php"
			}
		},
		messages: {
			captcha: "<span style='color:#f00;'>Correct captcha is required. Click the Captcha Image to generate a new one.</span>"
		},

		// the errorPlacement has to take the table layout into account
		errorPlacement: function(error, element) {
			if ( element.is(":radio") )
				error.appendTo( element.parent().next().next() );
			else if ( element.is(":checkbox") )
				error.appendTo ( element.next() );
			else
				error.appendTo( element.parent().next() );
		},
    submitHandler: function() {
			form.submit();
		},

		// specifying a submitHandler prevents the default submit, good for the demo
		// set this class to error-labels to indicate valid fields
		success: function(label) {
			// set &nbsp; as text for IE
			label.html("").addClass("checked");
      //form.submit();
		}
	});

  $('#agree').live('change', function() {
		var checked = $('#agree').prop('checked');
		$('#submitId').prop('disabled', !checked);
		if (checked) {
			$('#submitId').css('color','#ffffff');
		} else {
			$('#submitId').css('color','#AE6624');
		}
	});
	
	$('#submitId').prop('disabled', true);
	$('#submitId').css('color', '#AE6624');
});
</script>
  
<script type='text/javascript'>
$(function() {
	$("#arrDate").datepicker({
		onClose: function(){
			currenttab = $(this).attr("tabindex");
			nexttab = currenttab * 1 + 1;
			$("[tabindex='" + nexttab + "']").focus();
		}
	});
});

$(function() {
	$("#depDate").datepicker({
		onClose: function(){
			currenttab = $(this).attr("tabindex");
			nexttab = currenttab * 1 + 1;
			$("[tabindex='" + nexttab + "']").focus();
		}
	});
});

$(window).onload = (function() {
	$("#resName").focus();
});
	
</script>
	
</head>

<body>
<div id="Outer_wrap">
<div id="Wrap">
<?php include_once("../../analytics.php"); ?>
<?php
	include("../../header.php");
	include("../../nav.php");
	include("../../slideshow.php");
?>
<div id="content-wrap">
<!--<div id="title_rates">Lazy U Ranch Rates &amp; Reservations</div>-->
<div id="pageTitle">Lazy U Ranch Rates &amp; Reservations</div>

<div id="div2c_rbLeft">

	<h1 align="center">RATES</h1>
	<hr width="100%" />
  <h2 align="center">MAXIMUM OCCUPANCY: 8 PERSONS</h2>

	<hr width="100%" />
	<h2 align="center">SUMMER RATES:<br />MAY 1, - SEPT 30 (3) NIGHT MINIMUM</h2>
	<hr width="100%" />
	<br />
  <ul class="ratesUL">
  	<li>Minimum for up to 6 People:
    	<ul style="padding-left: 15px;">
      	<li>Thur - Sun $600 Per Night</li>
        <li>Mon - Wed $450 Per Night</li>
      </ul>
    </li>
    <li>Each Additional Person - $50 Per Night</li>
    <li>3 Night Minimum Stay for All Holidays</li>
    <li>2 Night Minimum Stay for Spring and Winter/Fall</li>
    <li>Day Guest - $25/Day Per Guest (Maximum 10)</li>
    <li>One Night Stay - Add 25%</li>
    <li>Weekly Rate: $3950.00</li>
  </ul>
	<br />
  <h3>Discounts</h3>
  <ul class="ratesUL">
    <li>25% Military Discount - Requirements:
    	<ul style="padding-left: 15px">
      	<li>Current Military ID, or</li>
        <li>DD214/Honorable Discharge</li>
      </ul>
    </li>
    <li>10% Discount for All Cash Transactions - Does Not Apply to Military Discounted Rates</li>
  </ul>
  <br />
  <h3>Deposits and Fees</h3>
  <ul class="ratesUL">
    <li>Refundable Security Deposit of $500 is Required</li>
    <li>50% (Non-refundable) Deposit Required at Time of Booking With Balance Due 30 Days Prior to Arrival</li>
    <li>Fee for Catering (Available upon Request)</li>
		<li>Cleaning Fee $160.00</li>
  </ul>
	<br />
  <h3>Other</h3>
  <ul class="ratesUL">
  	<li>No Credit Cards Accepted</li>
    <li>**Must Be 25 or Older to Rent This Property**</li>
  	<li>No Children Under 16 Years of Age</li>
    <li>Sales Tax Not Included</li>
    <li>Rates are Subject to Change at any Notice</li>
    </ul>
  <p>&nbsp;</p>
  
  <h3><a href="../../agreement/Policy.pdf">Print Policy Agreement</a></h3>
  <ul class="ratesUL">
  	
 	</ul></a></br>
 
	<hr width="100%" />
  <h2 align="center">PLEASE CALL US AT (210) 559-1377 WITH ANY QUESTIONS OR FOR MORE INFORMATION</h2>
	<hr width="100%" />
  <p>&nbsp;</p>

</div> <!-- End div2c_rbLeft -->

<div id="div2c_rbRight">
	<h1>Make your Reservation Now!</h1>
  <p>Just fill out the form below and we'll check availability for you.</p>
	<div id="resFormDiv">
   	<form name='resForm' id="resForm" method='post' action='./sendResRequest.php' enctype="application/x-www-form-urlencoded" >
    <table>
    	<tr>
      	<td width="132">Name:</td>
        <td>*</td>
        <td colspan="5"><input type="text" tabindex="1" class="resForm-input" name="resName" id="resName" required maxlength="75" onblur="javascript:various2.click();" /></td>
      </tr>
      <tr>
      	<td width="132">Arriving:</td>
        <td width="8">*</td>
        <td width="105"><input type="text" tabindex="2" class="resForm-Short" name="arrDate" id="arrDate" required maxlength="10" /></td>
      	<td width="32">&nbsp;</td>
        <td width="73">Departing:</td>
        <td width="10">*</td>
        <td width="200"><input type="text" tabindex="3" class="resForm-Short" name="depDate" id="depDate" required maxlength="10" /></td>
      </tr>
    	<tr>
      	<td>Street Address:</td>
        <td>*</td>
        <td colspan="5"><input type="text" tabindex="4" class="resForm-input" name="resStreet1" id="resStreet1" required maxlength="75" /></td>
      </tr>
    	<tr>
      	<td>Address Line 2:</td>
        <td>&nbsp;</td>
        <td colspan="5"><input type="text" tabindex="5" class="resForm-input" name="resStreet2" id="resStreet2" maxlength="75" /></td>
      </tr>
    	<tr>
      	<td>City:</td>
        <td>*</td>
        <td colspan="5"><input type="text" tabindex="6"  class="resForm-input" name="resCity" id="resCity" required maxlength="75" /></td>
      </tr>
    	<tr>
      	<td>State/Province:</td>
        <td>*</td>
        <td colspan="5">
        	<select name="resState" id="resState" class="resForm-State" tabindex="7" >
            <option value="" selected="selected">Other</option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
          </select>
        </td>
      </tr>
    	<tr>
      	<td>Zip Code:</td>
        <td>*</td>
        <td colspan="5"><input type="text" tabindex="8" class="resForm-Short" name="resZip" id="resZip" required maxlength="10" /></td>
      </tr>
    	<tr>
      	<td>Home Phone:</td>
        <td>&nbsp;</td>
        <td colspan="5"><input type="text" tabindex="9" class="resForm-input" name="resHome" id="resHome" maxlength="75" /></td>
      </tr>
    	<tr>
      	<td>Mobile Phone:</td>
        <td>&nbsp;</td>
        <td colspan="5"><input type="text" tabindex="10" class="resForm-input" name="resMobile" id="resMobile" maxlength="75"></td>
      </tr>
    	<tr>
      	<td>Email Address:</td>
        <td>*</td>
        <td colspan="5"><input type="text" tabindex="11" class="resForm-input" name="resEmail" id="resEmail" required maxlength="75" /></td>
      </tr>
    	<tr>
      	<td>Size of Party:</td>
        <td>*</td>
        <td colspan="5"><input type="text" tabindex="12" class="resForm-Short" name="resParty" id="resParty" required /></td>
      </tr>
    	<tr>
      	<td valign="top"><br>Comments:</td>
        <td valign="top">&nbsp;</td>
        <td colspan="5">
        	<textarea class="resForm-input" draggable="false" tabindex="13" name="resComments" id="resComments" rows="7" >Please enter any comments/questions you may have regarding your planned stay at the Lazy U Ranch.</textarea>
        </td>
      </tr>
			<tr>
    		<td valign="top"><div id="captchaimage"><a href="" id="refreshimg" onclick="refreshimg(); return false;" title="Click to refresh image"><img src="./ajaxform/captcha/image.php?<?php print(time()); ?>" alt="Captcha image" width="132" height="36" align="left"></a></div></td>
        <td>&nbsp;</td>
        <td colspan="5">
        	<p class="signUpText">
          	<input type="text" tabindex="14" class="resForm-Vfy" maxlength="6" size="20" name="captcha" id="captcha"  value="Enter Verification Code" onfocus="if(this.value=='Enter Verification Code'){this.value=''}" onblur="if(this.value==''){this.value='Enter Verification Code'}" />
					</p><div class="status"></div>
        </td>
     	</tr>
      <tr>
      	<!-- <td><input type='submit' name='submit' value="Submit" tabindex="15" class='resbutton-dark' /></td> -->
      	<td><input type='submit' id="submitId" name='submitId' value="Submit"  class='resbutton-dark' tabindex="15" /></td>
        <td>&nbsp;</td>
        <td colspan="5" class="resFormDisclaimer"><input type="checkbox" id="agree" />&nbsp;By Clicking the "Submit" button you are stating that you have read and agree 
        to the <a href="<?php print($siteRoot); ?>/geninfo/policies/simple.php" id="various2">Policies and Rules</a> of the Lazy U Ranch.</td>
      </tr>
    </table>
    </form>
    </div> <!-- End DIV resFormDiv -->
  <p>&nbsp;</p>
  
</div>
  
</div> <!-- End DIV content-wrap -->

</div> <!-- End DIV Wrap -->
</div> <!-- End DIV Outer_wrap -->
<?php include("../../footer.php"); ?>	
</body>
</html>