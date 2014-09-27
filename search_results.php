<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>

<body>

Your query: 

<?php


require_once('home/stephanie/Documents/www/Hackathon/semantics3-php/lib/Semantics3.php');

echo "TEST1"
$key = 'SEM3898F8F6810124C200EE3D04D0FCADACE';
$secret = 'OWU4MWQ4ZDFhNzZmNzAxZjMyYzg0YzhkZjBjODZmZDc';

echo "TEST2";

$requestor = new Semantics3_Products($key,$secret);

# Get our searched item
$searchquery = $_GET["searchquery"];

$requestor->products_field("name", $searchquery);

$results = $requestor->get_products();

echo $results;
echo "HELLO";
?>

</body>
</html>
