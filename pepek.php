<?php
$msg = "Hay apa kabar";

$msg = wordwrap($msg,70);

// send email
mail("cspinostore@gmail.com","judul",$msg);
?>