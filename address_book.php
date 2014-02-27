<?php
echo "<p>GET:</p>";
var_dump($_GET);

echo "<p>POST:</p>";
var_dump($_POST);

$address_book = [
    ['The White House', '1600 Pennsylvania Ave NW', 'Washington', 'DC', '20500', '202-555-1212'],
    ['Marvel Comics', 'P.O. Box 1527', 'Long Island City', 'NY', '11101', '718-555-1212'],
    ['LucasArts', 'P.O. Box 29901', 'San Francisco', 'CA', '94129-0901', '415-555-1212'],
];

function save_csv($array, $location){
	$handle = fopen($location, 'w');

	foreach ($array as $fields) {
	    fputcsv($handle, $fields);
	}

	fclose($handle);
}

save_csv($address_book,'address_book.csv');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Address Book</title>
</head>
<body>
	<h2>Address Book</h2>

<table>
	<? foreach ($address_book as $address) { ?>
		<tr>
			<? foreach ($address as $item) { ?>
			<td>
				<?= $item; ?>
			</td>
			<? } ?>
		</tr>
	<? } ?>
</table>
	<h2>New Customer entry</h2>

	<!-- <h4>Input new customer data</h4> -->
	<form method="POST" enctype="multipart/form-data" action="address_book.php">
<p>
     <label for="cutomer_name">Customer name
     <input id="customer_name" name="customer_name" type="text" autofocus="autofocus">

    </p>
<p>
     <label for="cutomer_address">Customer address
     <input id="customer_address" name="customer_address" type="text" >

    </p>
<p>
     <label for="cutomer_city">Customer city
     <input id="customer_city" name="customer_city" type="text" >

    </p>
<p>
     <label for="cutomer_state">Customer state
     <input id="customer_state" name="customer_state" type="text" >

    </p>
<p>
     <label for="cutomer_zip">Customer zip
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