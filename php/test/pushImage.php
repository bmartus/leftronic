<?php

require(realpath(dirname(__FILE__)) ."/../leftronic.php");
// make sure the CAcerts folder is in the same path as these .php files as well!

$leftronic = new Leftronic($_GET['accesskey']);
$leftronic->pushImage($_GET['streamname'], $_GET['imgURL']);
echo 'Done with image.';

?>

<button onclick="history.go(-1);">Back </button>
