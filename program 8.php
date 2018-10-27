<?php
$allTheStates = "Mississippi Alabama Texas Massachusetts Kansas Mexas";
$statesArray = [];
$states1 = explode(' ', $allTheStates);
$i = 0;
//states that ends in xas
foreach ($states1 as $state) {
 if (preg_match('/xas$/', ($state))) {
 $statesArray[$i] = ($state);
 $i = $i + 1;
 print "<br>"."\nThe States that ends in xas:\n" . $state;
 }
}
//states that begins with k and ends in s
foreach ($states1 as $state) {
 if (preg_match('/^k.*s$/i', ($state))) {
 $statesArray[$i] = ($state);
 $i = $i + 1;
 echo "<br>"."\nThe states that begins with k and ends in s:\n" . $state;
 }
}
//states that begins with M and ends in s
foreach($states1 as $state) {
if (preg_match('/^M.*s$/', ($state))) {
 $statesArray[$i] = ($state);
 $i = $i + 1;
 echo "<br>"."\nThe states that begins with M and ends in s:" . $state;
}
}
//states that ends in a
foreach($states1 as $state) {
  if (preg_match('/a$/', ($state))) {
 $statesArray[$i] = ($state);
 $i = $i + 1;
 echo "<br>"."\nThe states that ends in a:\n" . $state;
}
}
echo "<br>";
foreach ($statesArray as $element => $value) {
 print("<br>". $value . " is the element " . $element);
}
?>
