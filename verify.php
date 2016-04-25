<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$username = 'demo';
$password = 'earlyiq';

// local URL.
//$url = 'http://earlyiq.dev/api/C2kwXvd4cN3wa642GvwMVMPfeWaozmpm1jLPBxT9uKo%3D/xml';

// test URL.
$url = 'https://testapi.earlyiq.com/api/C2kwXvd4cN3wa642GvwMVMPfeWaozmpm1jLPBxT9uKo%3D/xml';


$sku = '';
$firstName = '';
$lastName = '';
$ssn = '';
$phone = '';
$streetAddress1 = '';
$streetAddress2 = '';
$city = '';
$state = '';
$zip5 = '';

parse_str($_SERVER['QUERY_STRING']);

$payload = "<earlyIQ>
  <action>validateIdentity</action>
  <params>
  <sku>$sku</sku>
    <firstName>$firstName</firstName>
    <lastName>$lastName</lastName>
    <ssn>$ssn</ssn>
    <phone>$phone</phone>
    <address>
        <streetAddress1>$streetAddress1</streetAddress1>
        <streetAddress2>$streetAddress2</streetAddress2>
        <city>$city</city>
        <state>$state</state>
        <zip5>$zip5</zip5>
    </address>
  </params>
</earlyIQ>";

$session = curl_init($url);
$rc = curl_setopt($session, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));
$rc = curl_setopt($session, CURLOPT_HEADER, true);
$rc = curl_setopt($session, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
$rc = curl_setopt($session, CURLOPT_USERPWD, $username . ":" . $password);
$rc = curl_setopt($session, CURLOPT_TIMEOUT, 30);
//$rc = curl_setopt($session, CURLOPT_SSLVERSION,3);
$rc = curl_setopt($session, CURLOPT_POST, 1);
$rc = curl_setopt($session, CURLOPT_POSTFIELDS, $payload);
$rc = curl_setopt($session, CURLOPT_RETURNTRANSFER, TRUE);

try {
  $response = curl_exec($session);
} catch (Exception $e) {
  curl_close($session);
  echo $e;
  return;
}

curl_close($session);


$response = preg_replace('/^.*<val/s', '<val', $response);
$response = preg_replace('/^.*<NoMethodSupplied/s', '<NoMethodSupplied', $response);
if (preg_match('/<id>(.*)<\/id>/', $response, $matches)) {
  $id = $matches[1];
}


$divider = '===============================================';
$output = '<answerAndQuestion>' . PHP_EOL .
  $response . PHP_EOL .
  $divider . PHP_EOL .
  $payload . PHP_EOL .
  '</answerAndQuestion>';

header("Content-Type:text/xml");
echo $output;
return NULL;



