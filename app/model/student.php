<?php

namespace app\model;
use think\Model;
use \think\facade\Db  ;
use think\cache\driver\Redis;
use think\facade\Config;



class student extends Model
{

    public function getinfo($id)
    {
//        Db::connect('tp')->table('student')->find();
//        return 44;

        $res = Db::table('student')->where('id', $id)->find();
//        var_dump($res);exit;
        return $res;


//        return $this->belongsToMany(Role::class, Access::class, 'role_id', 'auth_id');
    }

    public function testredis($id){
        $redis = new Redis(Config::get('cache.stores.redis'));
        $redis->set('pasawu', 'test');
        $pasa = $redis->get('pasawu');
        return $pasa;
    }

}