<html>
<head>
<link type='text/css'  href='http://earlyiq.dev/sites/all/libraries/modal/css/osx.css' rel='stylesheet' media='screen' />
</head>
<body>
<center>
<br>
<h1 style="color:235a9f; font-family:arial">Modal Integration Demo</h1>
<br>
<br>
<h2 style="color:235a9f; font-family:arial">Partner Site Initiation</h2>
<br>
<br>

<?php
$types='rc-bizid-001';
$api_key1='C2kwXvd4cN3wa642GvwMVMPfeWaozmpm1jLPBxT9uKo%3D';
if (isset($_GET['suffix'])) {
    $x =  $_GET['suffix'];
} else { 
    $x =  date('mdhis'); 
}
?>

<?php echo "<p>TYPES:$types</p><p>SUFFIX:$x</p><p>API:$api_key1</p>"; ?>
<a href='#' 
  id="getstarted" 
  class='osx demo-button'  
  style="color:235a9f; background-color:8dc126"
  data-iframe-height="690"
  data-iframe-src="http://earlyiq.dev/partner/realconnex/cert/getstarted?page_template=modal&first_name=Steve
  &type=<?php echo $types; ?>
  &last_name=Yin
  &email=modal%2B<?php echo $x; ?>%40earlyiq.com
  &api_key1=<?php echo $api_key1; ?>
  &no_password=1
  &companyID=B001<?php echo $x; ?>
  &company_name=Steve<?php echo $x; ?> Yin Co

  &state_of_registration=CA
  &rgst_filing_nbr=98765
  &state_of_incorporation=NV
  &corp_filing_nbr=4321
  &bus_address1=752 Dewitt Ave
  &bus_phone=7602342314
  &bus_city=San Diego
  &bus_state=CA
  &bus_postal=92101
  &url=http://www.disneyland.com
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
