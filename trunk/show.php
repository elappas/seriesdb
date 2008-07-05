<?php
include 'header.inc';
include 'library/config.php';
include 'library/opendb.php';
$show = $_GET['name'];
$query  = "SELECT * FROM ts_seasons WHERE Name='{$show}'";
$result2 = mysql_query($query);
echo "<table><tr><td>";
echo "<H3>{$show} </H3> </td>
	<td>
	<a href=\"index.php\"> back </a>
	</td>";
echo "</table>";
echo "<table border=1 rules=all>\n
      <tr>
      <th>Name </th>
      <th>Season</th>
      <th>Episodes</th>
      <th>Media</th>
      <th>Subtitles</th>
      <th>Case</th>
      </tr>";
while($row = mysql_fetch_array($result2, MYSQL_ASSOC)){
	echo "<tr>";
	echo "<td> {$row['Name']} </td>\n";
	echo "<td> {$row['Season']} </td>\n";
	echo "<td> {$row['Episodes']} </td>\n";
	echo "<td> {$row['Media']} </td>\n";
	echo "<td> {$row['Subs']} </td>\n";
	echo "<td> <a href=\"./disks.php?name={$row['Name']}&seas
		on={$row['Season']}\">Disks</a> </td>\n";
	echo "</tr>";
}
echo "</table>\n";
include 'footer.inc';

?>

