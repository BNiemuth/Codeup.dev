<?php

$address_book = [
    ['The White House', '1600 Pennsylvania Avenue NW', 'Washington', 'DC', '20500', '202-555-1212'],
    ['Marvel Comics', 'P.O. Box 1527', 'Long Island City', 'NY', '11101', '718-555-1212'],
    ['LucasArts', 'P.O. Box 29901', 'San Francisco', 'CA', '94129-0901', '415-555-1212'],
];

$handle = fopen('address_book.csv', 'w');

foreach ($address_book as $fields) {
    fputcsv($handle, $fields);
}

fclose($handle);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Address Book</title>
</head>
<body>
	<h2>Address book - New entry</h2>
<ul>
	<?php	
	foreach ($contents_array as $key => $value) {
	echo "<li>" . $value . " <a href = \"?remove=$key\">Remove item</a></li>";
}
?>

</ul>
	<!-- <h4>Input new customer data</h4> -->

	<form method="POST" enctype="multipart/form-data" action="address_book.csv">
<p>
     <label for="cutomer_name">Customer name
     <input id="customer_name" name="customer_name" type="text" autofocus="autofocus">

    </p>
	<form method="POST" enctype="multipart/form-data" action="address_book.csv">
<p>
     <label for="cutomer_name">Customer address
     <input id="customer_name" name="customer_name" type="text" >

    </p>
    <form method="POST" enctype="multipart/form-data" action="address_book.csv">
<p>
     <label for="cutomer_name">Customer city
     <input id="customer_name" name="customer_name" type="text" >

    </p>
	<form method="POST" enctype="multipart/form-data" action="address_book.csv">
<p>
     <label for="cutomer_name">Customer state
     <input id="customer_name" name="customer_name" type="text" >

    </p>
    <form method="POST" enctype="multipart/form-data" action="address_book.csv">
<p>
     <label for="cutomer_name">Customer zip
     <input id="customer_name" name="customer_name" type="text" >

    </p>
    <form method="POST" enctype="multipart/form-data" action="address_book.csv">
<p>
     <label for="cutomer_name">Customer phone number
     <input id="customer_name" name="customer_name" type="text" >

    </p>