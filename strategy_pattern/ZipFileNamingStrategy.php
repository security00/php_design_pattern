<?php
/**
 * Created by PhpStorm.
 * User: xql
 * Date: 2019/4/28
 * Time: 12:22
 */


/**
 * 创建 windows下的文件下载类,并生成下载链接
 * Class ZipFileNamingStrategy
 */

class ZipFileNamingStrategy extends FileNamingStrategy
{

    function createLinkName($filename)
    {
        return "http://download.self_website.com/$filename.zip";
    }
}