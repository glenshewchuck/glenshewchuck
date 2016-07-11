<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1, user-scalable=no" />
<link type='text/css'  href='http://earlyiq.dev/sites/all/libraries/modal/css/osx.css' rel='stylesheet' media='screen' />
</head>
<body>
<center>
<br>
<h1 style="color:235a9f; font-family:arial">Modal Integration Demo - Umergence</h1>
<br>
<br>
<h2 style="color:235a9f; font-family:arial">Partner Site Initiation</h2>
<br>
<br>

<?php
date_default_timezone_set('America/Los_Angeles');
$types='um-inv-001';
if (isset($_GET['suffix'])) {
    $x =  $_GET['suffix'];
    $email = 'modal%2B'.$x.'%40earlyiq.com';
    $hemail = hash_hmac('md5',$email,'umergence');
} else { 
    $x =  date('mdhis'); 
}
?>

<a href='#' 
  id="getstarted" 
  class='osx demo-button'  
  style="color:235a9f; background-color:8dc126"
  data-iframe-height="690"
  data-iframe-src="http://earlyiq.dev/partner/umergencecorp/cert/getstarted?page_template=modal
  &first_name=Steve
  &type=<?php echo $types; ?>
  &last_name=Sample
  &email=<?php echo $email; ?>
  &api_key1=O2n6kwJeYE3jQPekqTMkIaAM0SObbkWN7nU3Cg5c1v4%3D
  &gender=M
  &country=US
  &address1=777 DeYeeWee St
  &address2=Sweet 1 Dude
  &city=Leucadia
  &state=CA
  &postal=92024
  &no_password=1
  &partner_ref_id=<?php echo $x; ?>
  &enhancedkey=<?php echo $hemail; ?>
">Get Verified</a>

<br>
<br>
<br>
</center>
<p>&nbsp;</p>
<p>&nbsp;</p>

<!-- actual div that should be inserted at bottom of page -->
<div id="osx-modal-content">
    <div id="osx-modal-title">Verification</div>
    <div class="close"><a href="#" class="simplemodal-close">x</a></div>
    <div id="osx-loading"></div>
    <div id="osx-modal-data"></div>
</div>  

<!-- javascript that should be inserted at bottom of page -->
<script type="text/javascript" src="http://earlyiq.dev/sites/all/modules/contrib/jquery_update/replace/jquery/1.8/jquery.min.js?v=1.8.2"></script>
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/earlyiq.min.js?<?php echo date('mdh'); ?>'></script>
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/jquery.ba-postmessage.min.js'></script>


</body>
</html>
