<?php namespace link1st\test;

use Config ;

class easemob
{

    /**
     * 获取配置项
     * @return int
     */
    function get_config(){
        return Config::get('EASEMOB_DOMAIN',"空");
    }


    /**
     * 默认
     * @return mixed
     */
    public function index(){
        return 'index';
    }

};
