<?php
/**
 * Created by PhpStorm.
 * User: davinci
 * Date: 19.09.2018
 * Time: 14:08
 */

namespace Root\api\models;

class Manager
{
    public $login;
    public $permissions = [];

    public function access($module)
    {
        if(is_array($this->permissions))
            return in_array($module, $this->permissions);
        else
            return false;
    }
}