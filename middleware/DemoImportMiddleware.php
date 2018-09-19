<?php
/**
 * Created by PhpStorm.
 * User: davinci
 * Date: 19.09.2018
 * Time: 15:03
 */

namespace Root\middleware;

class DemoImportMiddleware
{
    private $import_files_dir = '../files/import/';
    private $import_file = 'import.csv';

    public function handle($request, $app, $next)
    {
        if( !empty($request['demo']) )
        {
            $temp_file   = tempnam($this->import_files_dir, 'temp_');
            $source_file = $this->import_files_dir.$this->import_file;

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
                $process = $i > 11 ? false : true;
            }

            fclose($temp);
            fclose($source);

            unlink($source_file);
            rename($temp_file, $source_file);
        }

        return $next($app);
    }
}