<?php

echo "<p>GET:</p>";
var_dump($_GET);

echo "<p>POST:</p>";
var_dump($_POST);

?>

<!DOCTYPEHTML>
<html>
<head>
	<title>My First HTML Form</title>
</head>
<body>
	<h3>User Login</h3>

		<form method="POST" action="">
			<p>
				<label for="username">Username</label>
				<input id="username" name="username" type="text" placeholder="Enter your username">
			</p>
			<p>
				<label for="password">Password</label>
				<input id="password" name="password" type="text" placeholder="Enter your password">
			</p>
			<p>
				<button type="submit" >Login</button>
			</p>

		</form>
		<form>
			<h3>Compose an Email</h3>

			<p>
				<label for="to">To</label>
				<input id="to"
				name="to" type="text" placeholder="Enter their email">
			</p>
			<p>
				<label for="from">From</label>
				<input id="from"
				name="from" type="text"
				placeholder="Enter your email">
			</P>
			<p>
				<label for="subject">Subject</label>
				<input id="subject"
				name="subject" type="text"
				placeholder="Enter email subject">
			</p>
			<p>
				<label for="body">Body</label>
				<textarea id="email_body" name="email_body" rows="7" cols="40" placeholder="Content Here"></textarea>
			</p>
			<p><label for="sent_folder">
  				  <input type="checkbox" id="sent_folder" name="sent_folder" value="yes" checked> Save a copy to my sent folder
				</label>
			</form>
			<form>
				<h3>Multiple Choice Test</h3>
			
			<p>What is the greatest Texas music act?</p>
				<label for="q1a">
				    <input type="radio" id="q1a" name="q1" value="ZZ_Top">
				    ZZ Top
				</label>
				<label for="q1b">
				    <input type="radio" id="q1b" name="q1" value="Steve_Miller">
				    Steve Miller
				</label>
				<label for="q1c">
				    <input type="radio" id="q1c" name="q1" value="Buddy_Holly">
				    Buddy Holly
				</label>
				<label for="q1d">
				    <input type="radio" id="q1d" name="q1" value="Janis_Joplin">
				    Janis Joplin
				</label>
			</p>
			<p>
				<label for="dog">What dog annoys you the most? </label>
				<select id="dog" name="os[]" multiple>
				    <option value="yapper">Ankle biting Yapper</option>
				    <option value="bay">Spine Jaring Baying Hound</option>
				    <option value="big">Snarling Big Dog</option>
				</select>

			</p>	
			<h3>Select Testing</h3>
			<p>
				<label for="weather">Select your current Texas weather: </label>
				<select id="weather" name="weather">
	    		<option>Friggin' Hot (Blacktop melting)</option>
	    		<option>Light Sleet (Shut down the highways)</option>
	    		<option selected>Hot (A/C on high)</option>
				</select>
			</p>

			</form>

</body>
<html>	