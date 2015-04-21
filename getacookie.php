<?php
var_dump($_COOKIE);
$cookie_name = "testo";
if(isset($_COOKIE[$cookie_name])) {
  echo 'got a cookie';
} else {
  echo 'NO dessert';
}
?>
