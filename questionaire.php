<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>

<body>

<?php
	$result = $_GET['searchquery'];
	$quiz = [];
	// Quiz if search query is 'Laptop'
	if ($result == "12855") {
?>

	<form name='getresults' method='post' action='cgi-bin/process.cgi'>		
		Search Query:
		<input type='text' name='searchquery'> </br><br/>
		<select name="searchquery">
			<option value="12855" selected>Laptop</option>
			<option value="12181">Cell Phones</option>
			<option value="23042">Tablet</option>
			<option value="13813">Television</option>
			<option value="4672">Desktop</option>
			<option value="2848">eBook Reader</option>
		</select> <br/><br/>
		<input type='submit' name='submit' value='submit'>
	</form>
<?php
	}
	// Quiz if search query is 'Cell Phones'
	else if ($result == "12181") {
?>

<?php
	}
	// Quiz if search query is 'Tablet'
	else if ($result == "23042") {
?>


<?php		
	}	
	// Quiz if search query is 'Television'
	else if ($result == "13813") {
?>

<?php		
	}	
	// Quiz if search query is 'Desktop'
	else if ($result == "4672") {
?>

<?php	
	}
	// Quiz if search query is 'eBook Reader'
	else {
?>


<?php
	}
?>


?>


<form name='searchform' method='post' action='cgi-bin/process.cgi'>
	Search Query:
	<input type='text' name='searchquery'> </br><br/>
	<select name="searchquery">
		<option value="12855" selected>Laptop</option>
		<option value="12181">Cell Phones</option>
		<option value="23042">Tablet</option>
		<option value="13813">Television</option>
		<option value="4672">Desktop</option>
		<option value="2848">eBook Reader</option>
	</select> <br/><br/>
	<input type='submit' name='submit' value='submit'>
</form>


</body>
</html>
