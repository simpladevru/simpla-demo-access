<?php

namespace Root\middleware;

use Root\helpers\LicenseHelper;

class CheckLicenseOrDemo
{
    public function handle($request, $app, $next)
    {
        $license = LicenseHelper::check($app);

        $demo_access = explode(':', $app->config->demo_access);

        if( !$license->valid && empty($demo_access) ) {
            header('location: '.$app->config->root_url.'/simpla/index.php?module=LicenseAdmin');
        } else if( !empty($demo_access) ) {
            ($app->managers->get_manager())->permissions = $demo_access;
        } else {
            throw new \Exception();
        }

        $request['demo'] = $license->valid ? false : true;
        $request['license']  = $license;

        return $next($request, $app);
    }
}