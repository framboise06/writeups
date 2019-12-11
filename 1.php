<?php 
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: YOUR COOKIE"
  )
);

$context = stream_context_create($opts);
$s = file_get_contents("https://www.newbiecontest.org/epreuves/prog/prog1.php",false,$context);
$f = explode(": ",$s);
//var_dump($f); $f[1];
echo file_get_contents("https://www.newbiecontest.org/epreuves/prog/verifpr1.php?solution=$f[1]",false,$context);
?>
