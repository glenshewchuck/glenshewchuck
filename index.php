<html>
<head>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript" src="select.js"></script>
<style>
</style>

</head>

<?php
  $xmldata = '<EarlyIQ>
  <Action>
    <GetInvestorStatus>
      <FirstName>David</FirstName>
      <LastName>Trissel</LastName>
      <InvestorID>dtrissel+cert1219@earlyiq.com</InvestorID>
    </GetInvestorStatus>
  </Action>
</EarlyIQ>';
    $xml = simplexml_load_string($xmldata);
?>

<body>
<p>&nbsp;</p>
<p><center><a 
href="https://www.earlyiq.com/investor-cert/HOqtHoLPvGsGH2teQbh4nM6qsF7WJ45KAUl9DAfhFKk|3D" 
target="_new"><img 
src="https://www.earlyiq.com/sites/all/themes/earlyiq/images/eiq_sprite.png" 
/><br><span style="font-size:x-small;">Certificate</span></a></center></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="report-card-link-div" style="display:none">
  <div id="selectlink">TEST</div>
  <p>Copy the selected image to your clipboard and then paste to email</p>
</div>
</body>
<html>
