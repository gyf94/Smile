<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
    {
        $order=M("city_stats")->Select();
        echo $order[1]['city_name'];
    }
}