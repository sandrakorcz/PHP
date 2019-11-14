<?php
$somevar=15;
function addit() {
global $somevar;
$somevar++;
echo "Somevar ma wartoœæ $somevar";
}
addit();
?>
