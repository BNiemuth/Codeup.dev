<!DOCTYPE html>
<html>
<head>
	<title>TODO List</title>
</head>
<body>
	<h3>TODO List</h3>
<ul>
<?php

$filename = "data/todo_list.txt";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
if(filesize ($filename) > 0);

//Explode with \n then fclose
$contents_array = explode("\n", $contents);
fclose($handle);

if(!empty($_POST) && $_POST ["todo_item"] !== ''){
array_push($contents_array, $_POST["todo_item"]);
}

if (isset($_GET['remove'])) {
	$key = $_GET["remove"];
	unset($contents_array[$key]);
	header("Location: todo-list.php");
}

//$list = ['Take out the trash', 'Water the dog', 'Walk the plants', 'Milk the chicken'];
foreach ($contents_array as $key => $value) {
echo "<li>" . $value . " <a href = \"?remove=$key\">Remove item</a></li>";
}
unset($contents_array[$key]);
?>
<!-- <ul>
	<li>Take out the trash</li>
	<li>Water the dog</li>
	<li>Walk the plants</li>
	<li>Milk the chicken</li> -->
<!-- Todo array
 -->
</ul>
	<h3>Select item to add to todo list:</h3>
<form method="POST" action="todo-list.php">
<p>
     <label for="todo_item">New todo item
     <input id="todo_item" name="todo_item" type="text" autofocus="autofocus">
    </p>
    <p>
       <input type="submit">
    </p>
</form>

<?php
$handle = fopen($filename, "w");
$saved_contents = implode ("\n", $contents_array);
fwrite($handle, $saved_contents);
fclose($handle);

?>
</body>
</html>