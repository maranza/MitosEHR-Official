<?php
include_once("../../registry.php");
include_once("$srcdir/api.inc");
require ("C_FormVitalsM.class.php");

$c = new C_FormVitalsM();
echo $c->default_action(0);
?>
