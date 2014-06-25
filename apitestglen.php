<?php

$payload = '<?xml version="1.0" encoding="UTF-8"?>
<EarlyIQ>
 <Action>AddCompany</Action>
 <params>
  <CompanyName>GSTestCompany10</CompanyName>
  <OfficerFirstName>Gstestcompany10</OfficerFirstName>
  <OfficerLastName>Officer10</OfficerLastName>
  <OfficerEmail>glenshewchuck+gstestco10@gmail.com</OfficerEmail>
 </params>
</EarlyIQ>';

$postfields = array(
    'xml' => $payload,
);

// ========================================================
// KEY is from eiq-inv-001
// #1 As Normal
//$key = "eOpGbwLnmf2p9fUmB0o0fwyEN+qchsNgcnxmW7Y3mIA=";
// #2 Urlencoded
$key = "eOpGbwLnmf2p9fUmB0o0fwyEN%2BqchsNgcnxmW7Y3mIA%3D";
// ========================================================

$type ="xml"; 
//$url = "https://testapi.earlyiq.com/api/$key/$type";
$url = "http://earlyiq.dev/api/$key/$type";

print $url; 
print "\n";

$session = curl_init($url);
curl_setopt($session, CURLOPT_HTTPHEADER, array('Content-Type:application/xml'));
curl_setopt($session, CURLOPT_HEADER, true );
// curl_setopt($session, CURLOPT_HTTPAUTH, CURLAUTH_BASIC );
// curl_setopt($session, CURLOPT_USERPWD, "earlyiq:demo" );
// curl_setopt($session, CURLOPT_TIMEOUT, 30 );
// curl_setopt($session, CURLOPT_SSLVERSION, 3 );
curl_setopt($session, CURLOPT_POST, true );
curl_setopt($session, CURLOPT_POSTFIELDS, $payload );
curl_setopt($session, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt($session, CURLOPT_VERBOSE, 1);

$response = curl_exec($session);
curl_close($session);
print_r($response);

?>
