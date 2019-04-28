<?php
/**
 * Created by PhpStorm.
 * User: xql
 * Date: 2019/4/28
 * Time: 12:25
 */

/**
 * 创建 unix下的文件下载类,并生成下载链接
 * Class TarGzFileNamingStrategy
 */

class TarGzFileNamingStrategy extends FileNamingStrategy
{

    function createLinkName($filename)
    {
        return "http://download.self_website.com/$filename.tar.gz";
    }
}