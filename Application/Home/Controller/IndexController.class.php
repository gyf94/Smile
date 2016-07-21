<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
    {
        echo"反应一下？";
        $this->display();
    }
}