<?php

require(realpath(dirname(__FILE__)) ."/../leftronic.php");
// make sure the CAcerts folder is in the same path as these .php files as well!

$leftronic = new Leftronic($_GET['accesskey']);
$color = trim($_GET['color']);
if ($color == '')
{
    $color = Null;
}
$leftronic->pushGeo($_GET['streamname'], $_GET['lati'],
    $_GET['longi'], $color);
echo 'Done with geo.';

?>

<button onclick="history.go(-1);">Back </button>
