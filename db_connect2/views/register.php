<html>
	<body>
	<!-- controllers/welcome.php -->
		<form action="controllers/welcome.php" enctype="multipart/form-data" method="post">
			<input type="submit" name="good" value="good" /><br>
			<input type="submit" name="bad" value="bad" /><br>
			<?php var_dump($_POST)?>
		</form>
	</body>
</html>