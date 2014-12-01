<html>
<head>
<link type='text/css'  href='http://earlyiq.dev/sites/all/libraries/modal/css/osx.css' rel='stylesheet' media='screen' />
<script type='text/javascript' src='client.js'></script>
</head>
<body>

<!-- the link as a button -->
<?php 
if (isset($_GET['suffix'])) { $x =  $_GET['suffix']; } 
else { $x =  date('mdhis'); }

if (isset($_GET['type'])) { $type =  $_GET['type']; } 
else { $type =  'certificate_id'; }
?>

<a href='#' 
  id="getstarted" 
  class='osx demo-button'  
data-command="printalert" 
data-iframe-src="http://earlyiq.dev/direct/investorcert/getstarted?page_template=modal&type=<?php echo $type; ?>&email=modal%2B<?php echo $x; ?>
@earlyiq.com&first_name=John<?php echo $x; ?>&last_name=Smith&api_key1=eOpGbwLnmf2p9fUmB0o0fwyEN%2BqchsNgcnxmW7Y3mIA%3D&no_password=1" data-iframe-height="690">Get Verified</a>

<p>&nbsp;</p>
<button>post to drupal</button>
<p>&nbsp;</p>

<!-- actual div that should be inserted at bottom of page -->
<div id="osx-modal-content">
    <div id="osx-modal-title">Verification</div>
    <div class="close"><a href="#" class="simplemodal-close">x</a></div>
    <div id="osx-modal-data"></div>
</div>  

<!-- javascript that should be inserted at bottom of page -->
<script type="text/javascript" src="http://earlyiq.dev/sites/all/modules/contrib/jquery_update/replace/jquery/1.7/jquery.min.js?v=1.7.1"></script>
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/osx.js'></script>
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/jquery.ba-postmessage.min.js'></script>

</body>
</html>
