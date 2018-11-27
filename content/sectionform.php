<section class="sectionform">
	<h2>User info</h2>
	<form action="confirm.php" method="post">
		<fieldset>
			<div><label>Login naam</label></div> : <input name="loginname" type="text"><br />
			<div><label>Wachtwoord</label></div> : <input name="Password" type="password"><br />
		</fieldset>
		<fieldset>
			<div><label>Naam gebruiker</label></div> : <input name="username" type="text" ><br />
			<div><label>Straatnaam</label></div> : <input name="streetname" type="text"><br />
			<div><label>Huisnummer</label></div> : <input name="house_number" type="text"><br />
			<div><label>Plaats</label></div> : <input name="place" type="text"><br />
		</fieldset>
		<div><label>Selecteer een vervoermiddel</label></div> :
		<select name="transport">
			<option value="car">Car</option>
			<option value="bus">Bus</option>
		</select><br />
		<input class="submit" name="submit" type="submit">
	</form>
</section>