<?php

require(realpath(dirname(__FILE__)) ."/../leftronic.php");
// make sure the CAcerts folder is in the same path as these .php files as well!

$leftronic = new Leftronic($_GET['accesskey']);
$leftronic->clear($_GET['streamname']);
echo 'Done with clear.';

?>

<button onclick="history.go(-1);">Back </button>
