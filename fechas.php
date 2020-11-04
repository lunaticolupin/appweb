
<?php
echo date("Y")."<br />";
echo date("d M y")."<br />";
echo date("d/m/Y")."<p />";
echo date("d/m/Y h:i:s")."<br />";
echo date("H:i:s")."<p />";
echo mktime(20 ,21, 22, 6, 14, 2011)."<br />";
echo date("d/m/Y", mktime(20 ,21, 22, 6, 14, 2011))."<br />";
echo date("d/m/Y", 1308079282)."<p />";
echo strtotime( "2011-10-22" )."<br />";
echo strtotime( "2011/10/22 20:30:05" )."<br />";
?>
