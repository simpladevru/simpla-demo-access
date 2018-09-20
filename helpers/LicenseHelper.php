<?php
/**
 * Created by PhpStorm.
 * User: davinci
 * Date: 20.09.2018
 * Time: 11:07
 */

namespace Root\helpers;

class LicenseHelper
{
    public static function check($app)
    {
        $p=11; $g=2; $x=7; $r = ''; $s = $x;
        $bs = explode(' ', $app->config->license);
        foreach($bs as $bl){
            for($i=0, $m=''; $i<strlen($bl)&&isset($bl[$i+1]); $i+=2){
                $a = base_convert($bl[$i], 36, 10)-($i/2+$s)%26;
                $b = base_convert($bl[$i+1], 36, 10)-($i/2+$s)%25;
                $m .= ($b * (pow($a,$p-$x-1) )) % $p;}
            $m = base_convert($m, 10, 16); $s+=$x;
            for ($a=0; $a<strlen($m); $a+=2) $r .= @chr(hexdec($m{$a}.$m{($a+1)}));}

        @list($l->domains, $l->expiration, $l->comment) = explode('#', $r, 3);

        $l->domains = explode(',', $l->domains);
        $h = getenv("HTTP_HOST");
        if(substr($h, 0, 4) == 'www.') $h = substr($h, 4);
        if((!in_array($h, $l->domains) || (strtotime($l->expiration)<time() && $l->expiration!='*')) && $app->request->get('module')!='LicenseAdmin') {
            $l->valid = false;
        }
        else  {
            $l->valid = true;
        }

        return $l;
    }
}