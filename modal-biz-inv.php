<html>
<head>
<link type='text/css'  href='http://earlyiq.dev/sites/all/libraries/modal/css/osx.css' rel='stylesheet' media='screen' />
</head>
<body>

<?php
$types='rc-bizinv-001';
if (isset($_GET['suffix'])) {
    $x =  $_GET['suffix'];
} else { 
    $x =  date('mdhis'); 
}
?>

<a href='#' 
  id="getstarted" 
  class='osx demo-button'  
  data-iframe-height="690"
  data-iframe-src="http://earlyiq.dev/partner/realconnex/cert/getstarted?page_template=modal&first_name=John<?php echo $x; ?>
  &type=<?php echo $types; ?>
  &last_name=Smith
  &email=modal%2B<?php echo $x; ?>%40earlyiq.com
  &api_key1=C2kwXvd4cN3wa642GvwMVMPfeWaozmpm1jLPBxT9uKo%3D
  &no_password=1
  &companyID=A001<?php echo $x; ?>
  &company_name=John<?php echo $x; ?> Smith Company 
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
  &partner_ref_id=<?php echo $x; ?>
  &middle_name=Mitty
  &dob=MTk4MDAxMzE%3D
  &gender=M
  &ssn=NTU1NDQzMzMz
  &country=US
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
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/earlyiq.min.js?<?php echo date('mdh'); ?>'></script>
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/jquery.ba-postmessage.min.js'></script>


</body>
</html>
