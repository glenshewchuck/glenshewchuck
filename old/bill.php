<html>
<head>
<body>
<script type="text/javascript">
    var url = "http://www.google.com/";
    var newWin = window.open(url, "Google","width=600,height=500");             
    if(!newWin || newWin.closed || typeof newWin.closed=='undefined') { 
      alert('pop up blocked, please allow popups'); 
    }
</script>
</body>
</head>
</html>
