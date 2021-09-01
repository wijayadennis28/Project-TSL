<?php
require_once('main.class.php');
$main = new Main;
$responseArr = $main->getAPIData('https://api.github.com/gists/public');
 echo '<pre>',print_r($responseArr),'</pre>';
?>