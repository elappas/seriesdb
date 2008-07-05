<?php
include 'header.inc';
include 'library/config.php';
include 'library/opendb.php';
$show = $_GET['name'];
$season= $_GET['season'];

echo "<h3> {$show} - Season {$season} </h3>";
$query = "SELECT * FROM ts_disks WHERE Name='{$show}' AND Season='{$season}'";
$result2 = mysql_query($query);
$i=1;
while($row = mysql_fetch_array($result2, MYSQL_ASSOC)){
	echo "Disk[{$i}]: {$row['Disk']}<br>";
	$i+=1;
}


include 'footer.inc';
?>
