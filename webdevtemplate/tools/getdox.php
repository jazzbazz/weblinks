<?php
	$term = basename($_SERVER['PHP_SELF'],'.php');
    $files = scandir('../dox/'.$term.'/');
    rsort($files); // this does the sorting
    echo("<aside class='dox_aside'><h4>".$zoeker."-dox</h4><ul class='dox_list'>");
    foreach($files as $file)
    {
      echo'<li><a href="../dox/'.$term.'/'.$file.'">'.$file.'</a></li>';
    }
  ?>