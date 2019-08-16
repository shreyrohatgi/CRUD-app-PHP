<?php include "templates/header.php"; ?>

	<h2>Find a user based on location</h2>

	<form action="fetch.php" method="post">
		<label for="location">Location</label>
		<input type="text" id="location" name="location" required>
		<input type="submit" name="submit" value="View Results">
	</form>
	
	<a href="index.php">Back to home</a>

<?php include "templates/footer.php"; ?>		
