<?php
/**
 * Created by PhpStorm.
 * User: xql
 * Date: 2019/4/28
 * Time: 12:28
 */

require_once "index.php";

if (strstr($_SERVER['OS'], "Windows_NT")) {
    $fileObj = new ZipFileNamingStrategy();
} else {
    $fileObj = new TarGzFileNamingStrategy();
}

$download_file = $fileObj->createLinkName("book");

$str = <<<STR
<h1>This is download file</h1>
<br />
<a href="$download_file">Book</a>
STR;

echo $str;

