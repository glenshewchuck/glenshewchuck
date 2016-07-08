<?php

$payload = '<?xml version="1.0" encoding="UTF-8" ?>
  <EarlyIQ>
    <action>getCompanyReportStatus</action>
    <params>
      <companyID>com</companyID>
    </params>
  </EarlyIQ>';

// doesn't work !!!

$username = 'joe';
$password = 'joe';

$url = "https://earlyiq.dev/api/wiD1%2BAExlUnazbJiYIXv0%2BW5l6PDLn3VE%2FMJWzKwQhA%3D/xml";
$session = curl_init($url);
curl_setopt($session, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));
curl_setopt($session, CURLOPT_HEADER, true);
curl_setopt($session, CURLOPT_HTTPAUTH, CURLAUTH_BASIC ) ;
curl_setopt($session, CURLOPT_TIMEOUT, 30);
curl_setopt($session, CURLOPT_SSLVERSION,3);
curl_setopt($session, CURLOPT_POST, 1);
curl_setopt($session, CURLOPT_POSTFIELDS, $payload);
curl_setopt($session, CURLOPT_RETURNTRANSFER, TRUE);

$response = curl_exec($session);

var_dump($response);

curl_close($session);
