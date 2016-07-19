<?php
/**
 * Created by PhpStorm.
 * User: gyf
 * Date: 2016/7/16
 * Time: 16:50
 */
namespace Admin\Controller;
use Think\Controller;
class StockController extends Controller {
    //检查一个时间片的库存
    public function checkStock($stats_date,$time)
    {
        $stock=M('shop_time_table')->where('stats_date='.$stats_date.'and time='.$time)->Select();
        $remain=$stock[0]['stock']-$stock[0]['use'];
        if($remain>0)
        {
            return true;
        }else
        {
            return false;
        }
    }
}