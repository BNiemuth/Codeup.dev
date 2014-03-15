<?php

$mysqli = new mysqli('127.0.0.1', 'codeup', 'password', 'codeup_mysqli_test_db');

if ($mysqli->connect_errno) {
    throw new Exception('Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// var_dump($_GET);

$sort_by = $_GET['sort_by'];
$sortOrder = $_GET['sortOrder'];


$result = $mysqli->query("SELECT * FROM national_parks order by $sort_by $sortOrder");

?>
<html>
<head>
	<title>National Parks</title>
</head>
<body>
	<h2>National Parks</h2>
<table> 
<tr>
  <td><a href="national_parks.php?sort_by=name&sortOrder=asc">&uarr;<strong>Park Name <strong></a>
  <a href="national_parks.php?sort_by=name&sortOrder=desc">&darr;</a></td>
  <td><a href="national_parks.php?sort_by=location&sortOrder=asc">&uarr;<strong>Site <strong></a>
  <a href="national_parks.php?sort_by=location&sortOrder=desc">&darr;</a></td> 
  <td><strong>Park Description<strong></td>
  <td><a href="national_parks.php?sort_by=date_established&sortOrder=asc">&uarr;<strong>Date Est. <strong></a>
  <a href="national_parks.php?sort_by=date_established&sortOrder=desc">&darr;</a></td>
  <td><a href="national_parks.php?sort_by=area_in_acres&sortOrder=asc">&uarr;<strong>Area in Acres <strong></a>
  <a href="national_parks.php?sort_by=area_in_acres&sortOrder=desc">&uarr;</a></td>
</tr>
<?php 

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['location'] . "</td>";
    echo "<td>" . $row['description'] . "</td>";
    echo "<td>" . $row['date_established'] . "</td>";
    echo "<td>" . $row['area_in_acres'] . "</td>";
    echo "</tr>";
}

?>
</table>

</body>
</html>