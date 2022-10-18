<?php

// авторизация
include("auth.php");
auth();

foreach ($arr as $key => $value)  {
  echo "$key   $value\n";
}

$n = count($arr);
for ($i=0; $i<$n; $i++) {
  echo "$i   ".$arr[$i]."\n";
}

?>