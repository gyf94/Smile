<?php
/**
 * Created by PhpStorm.
 * User: gyf
 * Date: 2016/7/17
 * Time: 21:54
 */
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    //查询用户OpenID在user_profile对应城市信息
    public function queryCity($open_id)
    {
        $user=M("user_profile")->where('open_id='.$open_id)->Select();
        echo $user[0]['city_id'];
        return $user[0]['city_id'];
    }
    //用户手动切换城市，更改city_id
    public function changeCity($city_id)
    {
        //$user_id=session();
        $user_id=1;
        $user=M("user_profile");
        $user->city_id=$city_id;
        $user->where('id='.$user_id)->save();
        echo "切换成功";
        return true;
    }
}