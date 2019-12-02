<?php
  
$content = basename($_SERVER['PHP_SELF'],'.php'); 

require_once('../inc/head.php');

require_once('../inc/nav.php');
 require_once('../inc/header.php');
echo("<main><div class='main__left'>");

require_once('../content/'.$content.'_content.php');

echo("</div><div class='main__right'>");

// require_once('../inc/sidebar.php');
// require_once('../content/'.$content.'_links.php');
 
include_once('../tools/getlinks.php');
include_once('../tools/getdox.php');


echo("</div></main>");

require_once('../inc/footer.php');


?>
