<?php
include 'header.inc';
include 'library/config.php';
include 'library/opendb.php';
$show = $_GET['name'];
$season= $_GET['season'];

echo "<h3> {$show} - Season {$season} </h3>";
$query = "SELECT * FROM ts_disks WHERE Name='{$show}' AND Season='{$season}'
	ORDER BY ts_disks.Disk ASC";
$result2 = mysql_query($query);
while($row = mysql_fetch_array($result2, MYSQL_ASSOC)){
	echo "Disk[{$row['Disk']}]: {$row['Case']}<br>";
}


include 'footer.inc';
?>
