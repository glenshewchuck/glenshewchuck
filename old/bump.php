<html>
<head>
<link type='text/css'  href='jquery-ui/jquery-ui.min.css' rel='stylesheet' media='screen' />

<style>
#dia {
  display:none;
  background-color:lightblue;
}
</style>
<script type="text/javascript" src="jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="jquery-ui/jquery-ui.min.js"></script>
<script>
$(document).ready(function() {
    $('body').on('click', 'a.pop', function() {
      window.open('http://earlyiq.dev/info.php','mywindow','width=400,height=200');
      //$('#dia').dialog();
    });
});
</script>
</head>
<body>

<a class="pop" href="#">click me</a>

<div id="dia">Oh my oh my</div>


</body>
</html>
