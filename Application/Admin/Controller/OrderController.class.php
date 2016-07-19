<?php
/**
 * Created by PhpStorm.
 * User: gyf
 * Date: 2016/7/16
 * Time: 15:25
 */
namespace Admin\Controller;
use Think\Controller;
class OrderController extends Controller {
    /*
     * 订单状态stats：
     * 1.待支付 2.进行中 3.超时取消 4.用户取消 5.后台取消 6.已完成
     */

    //项目类型1，点击立即预约,检查是否有待支付状态订单
    public function checkOrderStats()
    {
//        $user_id=session('user_id');
        $user_id=1;

        $order=M("order_stats")->where('stats=1 and user_id='.$user_id)->Select();
        if(count($order)==0)
        {
            //没有待支付订单
            //该城市仅一家店铺

            //该城市多家开发店铺
        }else{
            //有待支付订单，返回该订单id
            echo $order[0]['id'];
            return $order[0]['id'];
        }
    }
    //订单创建
    public function createOrder()
    {
        $order=M("order_stats");

        $order->id=0;
        $order->user_id=1;
        $order->city_id=1;
        $order->shop_id=1;
        $order->project_id=1;
//        $order->user_id=session('user_id');
//        $order->city_id=session('city_id');
//        $order->shop_id=session('shop_id');
//        $order->project_id=session('project_id');
        $order->sourse=1;//表示预约来源是微信
        $order->stats=1;//状态1：待支付
        $order->deposit_stats=1;
        $order->price=100;//可能是POST什么的
        $order->tel_num='13269339999';//可能是POST什么的
//        $order->stats_date=   //预约服务的时间，可能是POST什么的
        $order->time=date('y-m-d h:i:s',time());
        $order->c_time=date('y-m-d h:i:s',time());
        $order->m_time=date('y-m-d h:i:s',time());

        $order->add();
        echo "插入成功";
    }

    //超时取消
    public function timeout($order_id)
    {
        //判断现在的时间有没有超过15分钟

    }

    //用户取消订单
    public function userCancel($order_id)
    {
        $order=M("order_stats");
        $order->stats=4;
        $order->m_time=date('y-m-d h:i:s',time());
        $order->where('id='.$order_id)->save();
        echo "用户取消成功";
        return true;
    }

    //进行中状态检查
    public function checkDoingOrder()
    {
        //        $user_id=session('user_id');
        $user_id=1;

        $order=M("order_stats")->where('stats=2 and user_id='.$user_id)->Select();
        if(count($order)>4)
        {
            return false;//表示不能继续下单
        }
        return true;//表示正常下单
    }

    //用户前台“我的订单”
    //根据user_id查询用户全部订单
    public function showOrder()
    {
//        $user_id=session('user_id');
        $user_id=1;
        $order=M("order_stats")->where('user_id='.$user_id)->Select();
        return json_encode($order);
    }
}