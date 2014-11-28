<?php
$stdins = array();
while(true)
{
$stdin = trim(fgetc(STDIN));
if ($stdin === chr(0x1b)) {
echo implode($stdins);
return;
}
$stdins[] = $stdin;
}
?>
