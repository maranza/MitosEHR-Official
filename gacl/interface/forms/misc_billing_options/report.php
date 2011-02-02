<?php
include_once("../../registry.php");
include_once($GLOBALS["srcdir"]."/api.inc");
function misc_billing_options_report( $pid, $encounter, $cols, $id) {
$count = 0;
$data = formFetch("form_misc_billing_options", $id);
if ($data) {
print "<table><tr>";
foreach($data as $key => $value) {
if ($key == "id" || $key == "pid" || $key == "user" || $key == "groupname" || $key == "authorized" || $key == "activity" || $key == "date" || $value == "" || $value == "0" || $value == "0000-00-00 00:00:00" || $value =="0000-00-00") {
	continue;
}
if ($value == "1") {
$value = "yes"; 
}

$key=ucwords(str_replace("_"," ",$key));
print "<td><span class=bold>$key: </span><span class=text>$value</span></td>";
$count++;
if ($count == $cols) {
$count = 0;
print "</tr><tr>\n";
}
}
}
print "</tr></table>";
}
?> 
