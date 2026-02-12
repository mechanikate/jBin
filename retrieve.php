<?php
header('Content-Type: text/plain');
ini_set("pcre.recursion_limit", "524"); 
include 'settings.php';
function exception_error_handler($errno, $errstr, $errfile, $errline ) {
    if($errno === E_WARNING) {
        debug_print_backtrace();
    }
    return false;
}
set_error_handler("exception_error_handler");
$path = "{$storagePath}/{$_GET['q']}.html";
$realTarget = realpath($path);

if( str_replace("/","",strtolower($path)) !== str_replace("/","",strtolower($realTarget)) ) {
    http_response_code(404);
    die();
}
$myfile = fopen($path, "r") or die("Unable to open file!");
preg_match_all("/(?<=<textarea name=\"text\" rows=\"5\" cols=\"40\" disabled>)([\S\s]*)(?=<\/textarea>)/", fread($myfile,filesize($path)), $matches);

echo html_entity_decode($matches[1][0]);
?>
