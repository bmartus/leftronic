<?php

require(realpath(dirname(__FILE__)) ."/../leftronic.php");
// make sure the CAcerts folder is in the same path as these .php files as well!

$leftronic = new Leftronic($_GET['accesskey']);
$leftronic->pushText($_GET['streamname'], $_GET['myTitle'],
    $_GET['myMsg']);
echo 'Done with text.';

?>

<button onclick="history.go(-1);">Back </button>
