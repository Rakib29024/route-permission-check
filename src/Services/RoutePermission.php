<?php

namespace Rakib29024\Services;

class RoutePermission
{
    protected $edit;

    public function __construct() {
        $edit=false;
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
