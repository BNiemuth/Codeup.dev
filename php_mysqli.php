<?php

$mysqli = new mysqli('127.0.0.1', 'codeup', 'password', 'codeup_mysqli_test_db');

if ($mysqli->connect_errno) {
    throw new Exception('Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$query = 'CREATE TABLE national_parks (
    id INT unsigned NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    location VARCHAR(50) NOT NULL,
    description TEXT(250) NOT NULL,
    date_established DATE NOT NULL,
    area_in_acres FLOAT(10,2) DEFAULT 0,
    PRIMARY KEY (id)
);';

if (!$mysqli)->query($query)

$parks = [
	[
		'name' => 'Arches',
		'location' =>'Utah',
		'description' => "This site features more than 2,000 natural sandstone arches, including the Delicate Arch. In a desert climate millions of years of erosion have led to these structures, and the arid ground has life-sustaining soil crust and potholes, natural water-collecting basins. Other geologic formations are stone columns, spires, fins, and towers.",
		'date_established' => '1971-10-12',
		'area_in_acres' => '76,518.98',
	]
	[	
		'name' => 'Badlands',
		'location' =>'South Dakota',
		'description' => "The Badlands are a collection of buttes, pinnacles, spires, and grass prairies. It has the world's richest fossil beds from the Oligocene epoch, and there is wildlife including bison, bighorn sheep, black-footed ferrets, and swift foxes.",
		'date_established' => '1978-10-10',
		'area_in_acres' => '242,755.94',
	]
	[	
		'name' => 'Carlsbad Caverns',
		'location' =>'New Mexico',
		'description' => "Carlsbad Caverns has 117 caves, the longest of which is over 120 miles (190 km) long. The Big Room is almost 4,000 feet (1,200 m) long, and the caves are home to over 400,000 Mexican Free-tailed Bats and sixteen other species. Above ground are the Chihuahuan Desert and Rattlesnake Springs.",
		'date_established' => '1930-05-14',
		'area_in_acres' => '46,766.45',
	]
	[
		'name' => 'Denali',
		'location' =>'Alaska',
		'description' => "Centered around the Mount McKinley, the tallest mountain in North America, Denali is serviced by a single road leading to Wonder Lake. McKinley and other peaks of the Alaska Range are covered with long glaciers and boreal forest. Wildlife includes grizzly bears, Dall sheep, caribou, and gray wolves.",
		'date_established' => '1917-02-26',
		'area_in_acres' => '4,740,911.72',
	]
	[
		'name' => 'Everglades',
		'location' =>'Florida',
		'description' => "The Everglades are the largest subtropical wilderness in the United States. This mangrove ecosystem and marine estuary is home to 36 protected species, including the Florida panther, American crocodile, and West Indian manatee. Some areas have been drained and developed; restoration projects aim to restore the ecology.",
		'date_established' => '1934-05-30',
		'area_in_acres' => '1,508,537.90',
	]
	[
		'name' => 'Grand Canyon',
		'location' =>'Arizona',
		'description' => "The Grand Canyon, carved out by the Colorado River, is 277 miles (446 km) long, up to 1 mile (1.6 km) deep, and up to 15 miles (24 km) wide. Millions of years of exposure has formed colorful layers of the Colorado Plateau in mesas and canyon walls.",
		'date_established' => '1919-02-26',
		'area_in_acres' => '1,217,403.32',
	]
	[
		'name' => 'Hot Springs',
		'location' =>'Arkansas',
		'description' => "The only National Park in an urban area, this smallest National Park is based around the natural hot springs that have been managed for public use. Bathhouse Row preserves 47 of these with many beneficial minerals.",
		'date_established' => '1921-03-04',
		'area_in_acres' => '5,549.75',
	]
	[
		'name' => 'Isle Royale',
		'location' =>'Michigan',
		'description' => "The largest island in Lake Superior, this park is a site of isolation and wilderness. It has many shipwrecks, waterways, and hiking trails. The park also includes over 400 smaller islands in the waters up to 4.5 miles (7.2 km) from the island. There are only 20 mammal species and it is known for its wolf and moose relationship.",
		'date_established' => '1931-03-03',
		'area_in_acres' => '571,790.11',
	]	
	[
		'name' => 'Joshua Tree',
		'location' =>'California',
		'description' => "Covering parts of the Colorado and Mojave Deserts and the Little San Bernardino Mountains, this is the home of the Joshua tree. Across great elevation changes are sand dunes, dry lakes, rugged mountains, and granite monoliths.",
		'date_established' => '1994-10-31',
		'area_in_acres' => '789,745.47',
	]
	[
		'name' => 'Katmai',
		'location' =>'Alaska',
		'description' => "This park on the Alaska Peninsula protects the Valley of Ten Thousand Smokes, an ash flow formed by the 1912 eruption of Novarupta, as well as Mount Katmai. Over 2,000 grizzly bears come here to catch spawning salmon.",
		'date_established' => '1980-12-02',
		'area_in_acres' => '3,674,529.68',
	]
		]

foreach ($parks as $park)	{
	$query = "INSERT INTO national_parks (name, location, description, date_established, area_in_acres)"
	$query ,=
}	
?>