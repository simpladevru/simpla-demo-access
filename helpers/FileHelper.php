<?php
/**
 * Created by PhpStorm.
 * User: davinci
 * Date: 19.09.2018
 * Time: 23:50
 */

namespace Root\helpers;

class FileHelper
{
    public static function maxRows($dir, $file, $num)
    {
        $temp_file   = tempnam($dir, 'temp_');
        $source_file = $dir.$file;

        if(!$source = fopen($source_file, "r")) {
            return false;
        }

        if(!$temp = fopen($temp_file, "w")) {
            return false;
        }

        $i = 0;
        $process = true;
        while (($line = fgets($source, 4096)) !== false && $process)  {
            fwrite($temp, $line);
            $i++;
            $process = $i > $num ? false : true;
        }

        fclose($temp);
        fclose($source);

        unlink($source_file);
        rename($temp_file, $source_file);
    }
}