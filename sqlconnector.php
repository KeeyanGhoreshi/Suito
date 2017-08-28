<?php$user="root";$password="Qweasd123$";$database="stuff";
mysql_connect(localhost,$user,$password);@mysql_select_db($database) or die(
"Unable to select database");
$query = "INSERT INTO grocery VALUES ('','$field1-name','$field2-name'
,'$field3-name','$field4-name','$field5-name')";

mysql_query($query);mysql_close();?>
