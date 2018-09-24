<?php
 function url_exists($url_a_tester) {
  $flag = false;
  $F=@fopen($url_a_tester,"r");

  if ($F) {
   fclose($F);
   $flag = true;
  }

  return $flag;
 }

 if (url_exists("https://github.com/gchamillard/")) {
   print("yeah");
 }
?>
