<?php
/**
 * Created by PhpStorm.
 * User: davinci
 * Date: 19.09.2018
 * Time: 15:03
 */

namespace Root\middleware;

use Root\helpers\FileHelper;

class DemoImportMiddleware
{
    private $import_files_dir = '../files/import/';
    private $import_file = 'import.csv';

    public function handle($request, $app, $next)
    {
        if( !empty($request['demo']) ) {
            FileHelper::maxRows($this->import_files_dir, $this->import_file, 11);
        }
        return $next($app);
    }
}