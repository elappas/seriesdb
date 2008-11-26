<?php
include 'header.inc';
include 'library/config.php';
include 'library/opendb.php';

$query="SELECT * FROM ts_series ORDER BY Name ASC";
$result=mysql_query($query) or die('Error, SELECT query failed');
echo "<table border=1 rules=all frame=box >";
echo "<tr>
	<th> SHOW </th>
	<th> status </th>
	<th> Seasons </th>
	<th> Internet Database</th>\n";
while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
	echo '<tr>';
	echo '<td>';
	echo "<a href=\"./show.php?name={$row['Name']}\">{$row['Name']}	</a>";
	echo "</td>\n";
	echo "<td>{$row['status']}</td>";
	echo "<td>{$row['num_seasons']}</td>";
	echo "<td>";
	if($row['link']!=NULL) {
		echo "<a href=\"$row[link] \" target=\"_blank\">";
		echo 'link';
		echo '</a>';
	}
	echo '</td>';
	echo "</tr>\n";
}
echo '</table>';


include 'library/closedb.php';
include 'footer.inc';
?>
