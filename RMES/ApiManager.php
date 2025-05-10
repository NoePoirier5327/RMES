<?php

header('Content-Type: application/json; charset=utf-8');

require_once(__DIR__."/config.php");

if(!array_key_exists("path", $_GET)){
    echo formatJSON(null, 404);
    exit;
}

define("PATH", $_GET["path"]);

function formatJSON($data, $status="200"){
    return json_encode(array("status" => $status, "data" => $data), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
}

if(!array_key_exists(PATH, $CONFIG)){
    echo formatJSON(null, 404);
    exit;
}

echo formatJSON($CONFIG[PATH]);
exit;