<?php
/**
 * Created by PhpStorm.
 * User: gyf
 * Date: 2016/7/17
 * Time: 21:26
 */
namespace Home\Controller;
use Think\Controller;
class CityController extends Controller {

    //显示所有开放城市
    public function showOpencity()
    {
        $city = M("city_stats")->where('stats=1')->Select();
        $json=json_encode($city);
        echo $json;
        return $json;
    }

    /* 根据城市名称查询该城市是否开放
     * 开放，在user_profile中更改city_id，返回city_id
     * 不开放，返回北京的city_id
     */
    public function checkOpen($city_name)
    {
        $city = M("city_stats")->where('stats=1 and city_name="'.$city_name.'"')->Select();
        $city_id=$city[0]['id'];

        //$user_id=session();
        $user_id=1;

        if($city_id!=null)
        {
            $user=M("user_profile");
            $user->city_id=$city_id;
            $user->where('id='.$user_id)->save();
            echo $city_id;
            return $city_id;
        }else{
            echo "自动的1";
            return 1;
        }

    }
}