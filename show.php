<?php
echo "show.php <br>";
include 'library/config.php';
include 'library/opendb.php';
$show = $_GET['name'];
$query  = "SELECT * FROM ts_seasons WHERE Name='{$show}'";
$result2 = mysql_query($query);
echo "<table border=1 rules=all>\n
      <tr><th> {$show} </th></tr>";
while($row = mysql_fetch_array($result2, MYSQL_ASSOC)){
	echo "<tr>";
	echo "<td>{$row['Name']} </td>\n";
	echo "<td>{$row['Season']} </td>\n";
	echo "</tr>";
}
echo "</table>\n";


?>

