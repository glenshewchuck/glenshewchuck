<html>
<head>
<script type="text/javascript" src="http://earlyiq.dev/sites/all/modules/contrib/jquery_update/replace/jquery/1.7/jquery.min.js?v=1.7.1"></script>
<script type="text/javascript" src="jquery.cookie.js"></script>
<script>
$(function() {
  console.log( "ready!" );
});

function getout() {
  var email = 'dtrissel+aca@earlyiq.com';
  var email_encoded = encodeURIComponent(email);
  var logoutUrl = 'http://earlyiq.dev/logmeout/' + email_encoded;
  $.post(logoutUrl, email_encoded);
  alert('done getout');
};

function getoutcurrent() {
  var logoutUrl = 'http://earlyiq.dev/logmeout';
  $.post(logoutUrl);
  alert('done getoutcurrent');
};

function cookieMake() {
  var name = 'dude';
  $.cookie(name, 'the dude');
}

function cookieRemove() {
  var name = 'dude';
  var c = $.cookie(name);
  alert(c);
  var rc = $.removeCookie(name); 
  alert("remove cookie: " + rc);
}

</script>

</head>
<body>
<p><button onclick="cookieMake()">create cookie</button></p>
<p><button onclick="cookieRemove()">remove cookie</button></p>

<br><button onclick="getout()">Logout User dtrissel+aca@earlyiq.com</button>
<br><button onclick="getoutcurrent()">Logout Current User</button>
</body>
</html>
