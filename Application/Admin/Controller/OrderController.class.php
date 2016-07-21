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

    //后台确认完成
    public function finishOrder($order_id)
    {
        $order=M("order_stats");
        $order->stats=6;
        $order->m_time=date('y-m-d h:i:s',time());
        $order->where('id='.$order_id)->save();
        echo "订单完成";
        return true;
    }

    //后台人工取消
    public function adminCancel($order_id)
    {
        $order=M("order_stats");
        $order->stats=5;
        $order->m_time=date('y-m-d h:i:s',time());
        $order->where('id='.$order_id)->save();
        echo "后台取消成功";
        return true;
    }
}