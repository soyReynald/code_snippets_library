<?php
// MISSING to-do:
// $_COOKIE[""];

$encoded_cookie = "4444918";

// $age = substr($encoded_cookie, -2);
$age = substr($encoded_cookie, 5);
$id = substr($age, -3, 1);

echo "User age was: ". $age . ". <br/>";
echo "User id was: ".$id.".";

?>