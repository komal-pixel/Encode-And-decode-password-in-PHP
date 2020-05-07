<?php 
$name ="Komal-Pixel";
$encode= md5($name);
//Encoded result will be  "e5vgdlkcRFK#"
//it would be vary as per your string
$str = 'e5vgdlkcRFK#';
echo  base64_decode ($str);
//to econde password we canuse base64_enode instead of md5() function
// ?>
