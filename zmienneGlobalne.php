<?php
$somevar=15;
function addit() {
global $somevar;
$somevar++;
echo "Somevar ma warto�� $somevar";
}
addit();
?>
