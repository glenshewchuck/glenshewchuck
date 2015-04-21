<html>
<head>
<link type='text/css'  href='http://earlyiq.dev/sites/all/libraries/modal/css/osx.css' rel='stylesheet' media='screen' />
<link type='text/css'  href='glen.css' rel='stylesheet' media='screen' />
</head>
<body>

<?php
//if (isset($_GET['types'])) {
//  $types = $_GET['types'];
//} else {
  $types = 'rc-id-001,rc-inv-001,rc-bizid-001,rc-bizinv-001';
  $types = 'rc-id-001,rc-inv-001';
  $types = 'rc-id-001';
//}
if (isset($_GET['suffix'])) {
    $x =  $_GET['suffix'];
} else { 
    $x =  date('mdhis'); 
}
echo "<p>processing suffix: $x</p>";
echo "<p>processing types: $types</p>";
?>

<a href='#' 
  id="getstarted" 
  class='osx demo-button'  
  data-iframe-height="690"
  data-iframe-src="http://earlyiq.dev/partner/realconnex/cert/getstarted?page_template=modal&first_name=Glen
  &type=<?php echo $types; ?>
  &last_name=Shewchuck
  &email=Glen%2B<?php echo $x; ?>%40earlyiq.dev
  &api_key1=C2kwXvd4cN3wa642GvwMVMPfeWaozmpm1jLPBxT9uKo%3D
  &no_password=1
  &companyID=A001_<?php echo $x; ?>
  &company_name=John<?php echo $x; ?> Smith Company 
  &partner_ref_id=<?php echo $x; ?>
  &date_of_formation=MTk4MDAxMzE%3D
  &country=US
  &state_of_registration=CA
  &rgst_filing_nbr=98765
  &state_of_incorporation=NV
  &corp_filing_nbr=4321
  &bus_address1=752 Dewitt Ave
  &bus_address2=Suite %2310213B
  &bus_phone=7602342314
  &bus_city=San Diego
  &bus_state=CA
  &bus_postal=92101
  &url=http://www.disneyland.com
  &middle_name=Mitty
  &dob=MTk2MjEyMDU%3D
  &gender=M
  &ssn=NTYxNTUxOTgx
  &address1=777 DeYeeWee St
  &address2=Sweet 1 Dude
  &city=Leucadia
  &state=CA
  &postal=92024
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
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/glen.js?<?php echo date('mdh'); ?>'></script>
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/spin.min.js'></script>
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/jquery.ba-postmessage.min.js'></script>


</body>
</html>
