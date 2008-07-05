<html>
<head>
</head>

<body>
<center>
<?php
include 'library/config.php';
include 'library/opendb.php';

$query="SELECT * FROM ts_series";
$result=mysql_query($query) or die('Error, SELECT query failed');
echo "<table border=1 rules=all frame=box >";
echo "<tr>
	<th> SHOW </th>
	<th> tv.com link </th>\n";
while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
	echo '<tr>';
	echo '<td>';
	echo "<a href=\"./show.php?name={$row['Name']}\">
	{$row['Name']}
	</a>";
	echo "</td>\n<td>";
	if($row['link']!=NULL) {
		echo "<a href=\"$row[link] \" target=\"_blank\">";
		echo 'tv.com link';
		echo '</a>';
	}
	echo '</td>';
	echo "</tr>\n";
}
echo '</table>';


include 'library/closedb.php';
?>
</center>
</body>
</html>

