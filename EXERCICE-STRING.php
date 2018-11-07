<?php
$str="je suis rondino";
$str2="PHP 5";
echo  ucwords($str);

for($i=0; $i<strlen("$str2") ;$i++) {
 echo "<br>". $str2[$i]  ;
}
echo "<br>";
$strcomp="helloA";
$strcomp2="helloB";
 if (strcmp($strcomp,$strcomp2)<0 ) {
     echo" the first word in order $strcomp the second word in order $strcomp2";
 }
 elseif (strcmp($strcomp,$strcomp2)>0 ) {
     echo" the first word in order $strcomp2 ,the second word in order $strcomp";
 }
 else {
     echo "the same word";
 }


