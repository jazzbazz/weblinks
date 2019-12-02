<?php
require_once('connect.php');
// prepare the query
$query = "SELECT  * FROM links ";
if ($stmt = $con->prepare($query)) {
	
	$stmt->execute();
	
	$stmt->store_result();
	$stmt->bind_result($idb,$linkb,$categorieb,$sourceb,$typeb, $authorb);
	echo("<section class='link__results'>");
	echo ("<div class='card-container'>");
	$counter = 0;
	while($stmt->fetch()){
		$counter++;
		echo ("<div class='card'>");
		if($counter < 10){
			echo ("<span class='number_link'>0".$counter."</span>");
		}else {
			echo ("<span class='number_link'>".$counter."</span>");
		}
		echo ("<div class='card-title'>".$authorb."</div>");
		echo ("<div class='viewAllBtn btn btn-light'><a href=".$linkb." target='_blank'>Visit link</a></div>");	
		echo("<div class='linkprops'><p class='linktype'>".$typeb."</p>");
		echo("<p class='linkcategory'>".$categorieb."</p>");
		echo ("<p class='linksource'>".$sourceb."</p></div></div>");
			
		// echo "<tr><td>".$idb."</td><td>".$linkb."</td><td>".$categorieb."</td><td>".$sourceb."</td><td>".$typeb."</td><td>".$authorb."</td></tr>";
	}
	echo "</div></section>";


}

 ?>