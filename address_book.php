<?php
// echo "<p>GET:</p>";
// var_dump($_GET);

// echo "<p>POST:</p>";
// var_dump($_POST);

$location = 'address_book.csv';
$error_message = "";

function read_csv($location) {
	$handle = fopen($location, 'r');
	$filesize = filesize($location);
	if ($filesize > 0) {
		while(($data = fgetcsv($handle)) !==FALSE) {
			$contents[] = $data;
		}

	} else {
		$contents = [];
	}
	fclose($handle);
	return $contents;
}

function save_csv($array, $location){
	$handle = fopen($location, 'w');

	foreach ($array as $fields) {
	    fputcsv($handle, $fields);
	}

	fclose($handle);
}

function add_address($address_book, &$error_message){
	$temp = $_POST;
	if ($temp['customer_name'] == '' || ['customer_address'] == '' || ['customer_city'] == '' ||
	['customer_state'] == '' || ['customer_zip'] == '') {
		$error_message = '** It looks like you left something blank.** :(';

	} else {
		$address_book[] = $temp;
	}
	return $address_book;
}

// check for empty fields
// if (empty($_POST['name'])) {
// 	echo "Name field is empty";
// } else {
// 	echo "Name field is not empty";
// }

$address_book = read_csv ($location);

if (!empty($_POST)) {
	$address_book=add_address($address_book, $error_message);
}

// Add new entry to address_book

save_csv($address_book,$location);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Address Book</title>
</head>
<body>
	<h2>Address Book</h2>

<table>
	<? foreach ($address_book as $key => $address) { ?>
		<tr>
			<? foreach ($address as $item) { ?>
			<td>
				<?= $item; ?>
			</td>
			<? } ?>
			<td><a href="?remove=<?=$key?>">Remove item</a></td>
		</tr>
	<? } ?>
</table>

	<h2>New Customer entry</h2>
	<h5>* Required field<h5>

<?= "<p><h4>{$error_message}</h4></p>" ?>

	<!-- <h4>Input new customer data</h4> -->
	<form method="POST" enctype="multipart/form-data" action="address_book.php">
<p>
     <label for="cutomer_name">Customer name *
     <input id="customer_name" name="customer_name" type="text" autofocus="autofocus">

    </p>
<p>
     <label for="cutomer_address">Customer address *
     <input id="customer_address" name="customer_address" type="text" >

    </p>
<p>
     <label for="cutomer_city">Customer city *
     <input id="customer_city" name="customer_city" type="text" >

    </p>
<p>
     <label for="cutomer_state">Customer state *
     <input id="customer_state" name="customer_state" type="text" >

    </p>
<p>
     <label for="cutomer_zip">Customer zip *
     <input id="customer_zip" name="customer_zip" type="text" >

    </p>
<p>
     <label for="cutomer_phone">Customer phone number
     <input id="customer_phone" name="customer_phone" type="text" >

    </p>
    <p>
       <input type="submit">
    </p>
</form>
</body>
</html>