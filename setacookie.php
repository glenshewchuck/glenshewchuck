<html>
<head>
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/jquery-1.11.2.min.js'></script>
<script type='text/javascript' src='http://earlyiq.dev/sites/all/libraries/modal/js/jquery.ba-postmessage.js'></script>
<script type="text/javascript">

var $ = jQuery.noConflict();

function cookiesOk() {
    document.cookie="testo=John Doe; expires=Thu, 18 Dec 2015 12:00:00 UTC; path=/";
    var x = document.cookie;
    if (x.length === 0) {
      return 0;
    } else {
      return 1;
    }
  }

  if (cookiesOk()) {
    var message = { command:"cookieGood", message:"cookieGood" };
  } else {
    var message = { command:"cookieBad", message:"cookieBad" };
  }

  var parent_domain = 'http://test.dev';
  var message = jQuery.param( message );
  $.postMessage(
     message,
     parent_domain,
    parent
  );
</script>
</head>
<body>
complete
</body>
</html>
