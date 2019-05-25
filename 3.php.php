<?php

function countVowels ($kata){


$arr = str_split($kata)
$vocal = ["a","e","i","u","o"];
$found = array_intersect($vocal, $arr);
$count = array_intersect($arr);
$result = [];

foreach ($found as $item){
    $result[$item] = $count[$item];
}
return $result;
}
$count_vowel ="programmer";
echo $count_vowel;
echo "<br>";
var_dump(hitung_vocal($count_vowel))


/*
<!DOCTYPE html>
<html>
<head>
<title>Hitung Huruf Vocal</title>
</head>
<body>
    <h1>Hitung Huruf Vocal</h1>
    <form method="POST" action=""></form>
</body>

</html>
*/
?>