<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link type='text/css'  href='http://earlyiq.dev/sites/all/libraries/modal/css/osx.css' rel='stylesheet' media='screen' />
</head>
<body>
<center>
<br>
<h1 style="color:235a9f; font-family:arial">iFrame Cookie Monster Test</h1>
<br>

<?php
$types='rc-id-001';
$api_key1='C2kwXvd4cN3wa642GvwMVMPfeWaozmpm1jLPBxT9uKo%3D';
if (isset($_GET['suffix'])) {
    $x =  $_GET['suffix'];
} else { 
    $x =  date('mdhis'); 
}
?>

<?php echo "<p>TYPES:$types</p><p>SUFFIX:$x</p><p>API:$api_key1</p>"; ?>
<iframe src="http://earlyiq.dev/cookie.php?page_template=modal&first_name=Steve
  &type=<?php echo $types; ?>
  &last_name=Yin
  &email=modal%2B<?php echo $x; ?>%40earlyiq.com
  &api_key1=<?php echo $api_key1; ?>
  &no_password=1
  &partner_ref_id=<?php echo $x; ?>
">Get Verified</iframe>

<p>&nbsp;</p>

<!-- actual div that should be inserted at bottom of page -->
<div id="osx-modal-content">
    <div id="osx-modal-title">Verification</div>
    <div class="close"><a href="#" class="simplemodal-close">x</a></div>
    <div id="osx-loading"></div>
    <div id="osx-modal-data"></div>
</div>  

<!-- javascript that should be inserted at bottom of page 
<script type="text/javascript" src="http://earlyiq.dev/sites/all/modules/contrib/jquery_update/replace/jquery/1.8/jquery.min.js?v=1.8.2"></script>
-->
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/jquery-1.11.2.min.js'></script>
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/jquery.simplemodal.full.js'></script>
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/spin.min.js'></script>
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/osx.js'></script>
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/jquery.ba-postmessage.js'></script>
<!--
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/earlyiq.min.js?<?php echo date('mdh'); ?>'></script>
-->


</body>
</html>
