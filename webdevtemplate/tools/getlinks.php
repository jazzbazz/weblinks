<?php
require_once('connect.php');
$zoeker = basename($_SERVER['PHP_SELF'],'.php');

//All links with php.self uit database halen en als links eruithalen
if ($stmt = $con->prepare('
	SELECT  
	
	link, categorie, source, type, author
	FROM links
	WHERE categorie = (?)'
	)) {
	// zoeker haalt alle links uit database die zelfde naam als pagina
	$stmt->bind_param('s', $zoeker);
	$stmt->execute();
	$stmt->store_result();


 if ($stmt->num_rows > 0) {
 	$stmt->bind_result($link, $categorie, $source, $type, $author);
 	echo ("<aside class='sideNav'><h4>".$zoeker."-links</h4><ul class='linklist'>");
 	while($stmt->fetch()){
 		echo ("<li>
 				<a href='".$link."'>".$author."</a>
 				</li>

 			");
 		

 	};
 		echo ("</ul></aside>");
 }
	
$stmt->close();
}


?>



