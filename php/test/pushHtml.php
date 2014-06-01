<?php

require(realpath(dirname(__FILE__)) ."/../leftronic.php");
// make sure the CAcerts folder is in the same path as these .php files as well!

$leftronic = new Leftronic($_GET['accesskey']);
$leftronic->pushHtml($_GET['streamname'], $_GET['html']);
echo 'Done with HTML.';

?>

<button onclick="history.go(-1);">Back </button>
