<html>
<head>
<script type="text/javascript" src="https://dev.earlyiq.com/sites/all/modules/contrib/jquery_update/replace/jquery/1.8/jquery.min.js?v=1.8.2"></script>
<script type="text/javascript" src="https://dev.earlyiq.com/sites/all/modules/contrib/jquery_update/replace/ui/minified/jquery.ui.dialog.min.js?v=1.8.2"></script>
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/jquery.ba-postmessage.min.js'></script>
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/osx.js'></script>

<script>
$(document).ready(function() {
  $('#dia').dialog();
});

function looky() {
  //alert('looky looked');
  var x = $('#cookieset').length;
  var y = $('iframe');
  var z = JSON.stringify(y);
  alert ('window load #cookieset length: ' + x + ':' + z);
}
$( window ).load(function() { 
  //setTimeout(looky, 1000);
});

$('iframe').load(function() { 
  alert('hi:');
  //alert(document.domain);
  //var x = document.cookie;
});
</script>
</head>
<body>
<div id="dia">this is the dialog text</div>
<center>
<br>
<iframe id="one" src="https://dev.earlyiq.com/setacookie.php"><iframe>

<?php
echo '<br>=========<br>';
//echo '<iframe id="one" src="https://dev.earlyiq.com/setacookie.php"><iframe>';
echo '<br>=========<br>';
?>

</body>
</html>
