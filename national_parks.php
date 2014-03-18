<?php

$mysqli = new mysqli('127.0.0.1', 'codeup', 'password', 'codeup_mysqli_test_db');

if ($mysqli->connect_errno) {
    throw new Exception('Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// var_dump($_GET);

if(!empty($_POST)){
  $new_park = $mysqli->prepare("INSERT INTO national_parks (name, location, description, date_established, area_in_acres) values (?, ?, ?, ?, ?)");
$new_park->bind_param("ssssd", $_POST['name'], $_POST['location'], $_POST['description'], $_POST['date_established'], $_POST['area_in_acres']);
$new_park->execute();
}

if (!empty ($_GET)) {

$sort_by = $_GET['sort_by'];
$sortOrder = $_GET['sortOrder'];

  $result = $mysqli->query("SELECT * FROM national_parks order by $sort_by $sortOrder");

} else {
  $result = $mysqli->query("SELECT * FROM national_parks");
}
// var_dump ($_POST);
?>
<html>
<head>
	<title>National Parks</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h2>National Parks</h2>
<table class="table table-striped"> 
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

<h3>Input new park data</h3>

<form method="POST" enctype="multipart/form-data">
<p>
     <label for="name">Park name
     <input id="name" name="name" type="text" autofocus="autofocus">
    </p>
    <p>
     <label for="location">Site
     <input id="location" name="location" type="text">
    </p>
    <p>
     <label for="description">Description
     <input id="description" name="description" type="text">
    </p>
    <p>
     <label for="date_established">Date est.
     <input id="date_established" name="date_established" type="text">
    </p>
    <p>
     <label for="area_in_acres">Area in acres
     <input id="area_in_acres" name="area_in_acres" type="text">
    </p>
     <p>
       <input type="submit">
    </p>
</form>

</body>
</html>