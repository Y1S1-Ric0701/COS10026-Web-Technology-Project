<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rohirrim Booking</title>
	<meta charset="utf-8"/>
	<meta name="description" content="Rohirrim Booking Form" />
	<meta name="keywords"    content="Booking Form" />
	<title>Rohirrim Booking Form</title>
</head>

<body>

<?php include ('connection.php'); ?>
<?php include ('createtable.php'); ?>

<header>
	<h1>Rohirrim Ranch Tours</h1>
	<h2>Booking Form</h2>
</header>

<form id="regform" method="POST" action="confirm.php" novalidate = "novalidate">
<fieldset id="person"> 
	<legend>Your details:</legend>
	<p><label for="firstname">Enter your first name</label>
		<input type="text" name="firstname" id="firstname" size="20"  />
	</p>
	<p><label for="lastname">Enter your last name</label>
		<input type="text" name="lastname" id="lastname" size="20"  />
	</p>	 
	
	<p><label for="age">Enter your age</label>
		<input type="text" id="age" name="age" size="5">
	</p>
	
  </fieldset>

	<p>
		<label for="food">Menu preferences</label>
		<select name="food" id="food">
			<option value="none">Please select</option>
			<option value="Lembas">Lembas</option>
			<option value="Mushrooms">Mushrooms</option>
			<option value="Ent Draft">Ent Draft</option>
			<option value="Cram">Cram</option>
		</select>
	</p>
	<p>
	<label for="partySize">Number of Travellers</label>
			<input type="text" id="partySize" name="partySize" maxlength="3" size="3" />
	</p>
</fieldset>
  <div id="bottom"> </div>
  <p><input type="submit" value="Book Now!" />
     <input type="reset" value="Reset" />
  </p>
</form>

<footer>
<div>
	<h2 class="fineprint">Conditions Apply</h2>
	<p class="fineprint">  Rohirrim Dude Ranch management takes no responsibility for any injury, spells (sleeping or otherwise) , spider-bites, or for anything whatsoever.	</p> 
</div>
	<p id="contact" >Any enquiries please email the <a href="#">manager</a></p>
</footer>

</body>
</html>
