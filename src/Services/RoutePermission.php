<?php

namespace Rakib29024\Permission\Services;

class RoutePermission
{
    public function __construct() {
    }
    public function CanView($routes){
        for ($i=0; $i < count($routes); $i++) {
            $list=explode('.',$routes[$i]);
            $key=end($list);
            if($key=='index'){
                $previous_key=$list[count($list)-2];
                $key=$previous_key.$key;
            }
            if(canViewRoute($routes[$i],'route')){
                $data[$key]=$routes[$i];
            }else{
                $data[$key]=false;
            }
        }
        return $data;
    }
}
