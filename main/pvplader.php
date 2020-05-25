<?php if (!defined('FLUX_ROOT')) exit;
$query = "SELECT * FROM pvpladder"; //You don't need a ; like you do in SQL
$result = mysql_query($query);

echo "<table>"; // start a table tag in the HTML

while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['name'] . "</td><td>" . $row['streaks'] . "</td><td>" . $row['kills'] . "</td><td>" . $row['deaths'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
?>