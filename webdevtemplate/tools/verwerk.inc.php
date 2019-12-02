<?php

include_once('connect.php');
// DOUBLE CHECK IF LINK IS ALLREADY ADDED OR NOT

if($stmt = $con->prepare('
	SELECT link
	FROM links
	WHERE link = (?)')){
	$stmt->bind_param('s', $link);
	$stmt->execute();
	$stmt->store_result();
}
 if ($stmt->num_rows > 0) {
 	die("link allready in database");

} else {

include_once('connect.php');
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('
	INSERT INTO  
	links
	(link, categorie, source, type, author)
	VALUES (?,?,?,?,?)')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('sssss', $link, $categorie, $source, $type, $author);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
}


	
$stmt->close();

}
?>
