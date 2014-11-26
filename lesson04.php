<?php
$stdins = array();
    while(true)
    {
        $stdin = trim(fgets(STDIN));
        if ($stdin === '¥e')
        {
            var_dump($stdins);
            return;
        }
        $stdins[] = $stdin;
    }
?>
