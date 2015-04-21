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
$coprefix='A001';
$types='rc-id-001,rc-bizid-001';
$api_key1='C2kwXvd4cN3wa642GvwMVMPfeWaozmpm1jLPBxT9uKo%3D';
if (isset($_GET['suffix'])) {
    $x =  $_GET['suffix'];
} else {
    $x =  date('mdhis');
}
?>


<?php echo "<p>TYPES:$types</p><p>NAME:JOHN$x</p><p>EMAIL:modal+$x</p>COMPANYID:$coprefix$x<p></p><p>API:$api_key1</p>"; ?>
<a href='#' 
  id="getstarted" 
  class='osx demo-button'  
  data-iframe-height="690"
  data-iframe-src="http://earlyiq.dev/partner/realconnex/cert/getstarted?page_template=modal&first_name=Lone<?php echo $x; ?>
  &type=<?php echo $types; ?>
  &last_name=Ranger
  &email=modal%2B<?php echo $x; ?>%40earlyiq.com
  &api_key1=C2kwXvd4cN3wa642GvwMVMPfeWaozmpm1jLPBxT9uKo%3D
  &no_password=1
  &companyID=<?php echo $coprefix . $x; ?>
  &company_name=Lone<?php echo $x; ?> Ranger Company 
  &state_of_incorporation=NV
  &partner_ref_id=<?php echo $x; ?>
">Get Verified</a>

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
