<?php
$fp = fopen("count.txt","r");
$count = fread($fp,1024);
fclose($fp);
$count = $count + 1;
echo "<p> Page Count: ".$count." </p>";
$fp = fopen("count.txt","w");
fwrite($fp,$count);
fclose($fp);
?>