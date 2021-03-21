<?php

namespace Rakib29024\Permission\Services;

class RoutePermission
{
    public function __construct() {
    }
    public function CanView($routes){
        for ($i=0; $i < count($routes); $i++) {
            $key=explode('.',$routes[$i]);
            $key=end($key);
            if(canViewRoute($routes[$i],'route')){
                $data[$key]=$routes[$i];
            }else{
                $data[$key]=false;
            }
        }
        return $data;
    }
}
