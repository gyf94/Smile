<?php
/**
 * Created by PhpStorm.
 * User: gyf
 * Date: 2016/7/17
 * Time: 21:35
 */
namespace Home\Controller;
use Think\Controller;
class ShopController extends Controller {
    //根据开放城市的id显示此城市所有开放店铺
    public function showOpenShop($city_id)
    {
        $shop=M("shop_stats")->where('stats=1 and city_id='.$city_id)->Select();
        //echo json_encode($shop);
        return json_encode($shop);
    }
    //根据shop_id查询门店的信息
    public function shopInfo($shop_id)
    {
        $shop=M("shop_stats")->where('id='.$shop_id)->Select();
        return json_encode($shop);
    }

    public function shopInfoArr($shop_id)
    {
        $shop=M("shop_stats")->where('id='.$shop_id)->Select();
        return $shop[0];
    }
}