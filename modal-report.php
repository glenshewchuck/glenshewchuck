<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
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
$types='eiq-001';
if (isset($_GET['suffix'])) {
    $x =  $_GET['suffix'];
} else { 
    $x =  date('mdhis'); 
}
// field_partner_co_id
?>

<a href='#' 
  id="getstarted" 
  class='osx demo-button'  
  style="color:235a9f; background-color:8dc126"
  data-iframe-height="690"
  data-iframe-src="http://earlyiq.dev/partner/earlyiq/cert/getstarted?page_template=modal&first_name=EDave
  &type=<?php echo $types; ?>
  &last_name=IQLast
  &companyID=Boss<?php echo $x ?>
  &company_name=IQLastCo
  &email=modal%2B<?php echo $x; ?>%40earlyiq.com
  &api_key1=wiD1%2BAExlUnazbJiYIXv0%2BW5l6PDLn3VE%2FMJWzKwQhA%3D
  &no_password=1
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
  &country=US
  &dob=MTk5MDAxMDE%3D
  &gender=M
  &ssn=NTU1NTUxMjEy
  &country=US
  &address1=777 DeYeeWee St
  &city=Leucadia
  &state=CA
  &postal=92024
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
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/osx.js?<?php echo date('mdhis'); ?>'></script>
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/spin.min.js?<?php echo date('mdhis'); ?>'></script>
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/mobile-detect.min.js?<?php echo date('mdhis'); ?>'></script>
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/jquery.ba-postmessage.min.js'></script>


</body>
</html>
