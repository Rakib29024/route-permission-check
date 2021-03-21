<?php

namespace Rakib29024\Permission\Facades;

class Permission
{
    public static function getPermissionAccess($name){
        return app()[$name];
    }
    public static function __callStatic($method, $args){
        return (self::getPermissionAccess('Permission'))
                ->$method($args);
    }
}
