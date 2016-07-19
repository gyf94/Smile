<?php
/**
 * Created by PhpStorm.
 * User: gyf
 * Date: 2016/7/17
 * Time: 20:34
 */
namespace Home\Controller;
use Think\Controller;
class ProjectController extends Controller {
    public function pro_detail()
    {
        $this->display();
    }

    //显示一个城市的所有项目
    public function showProject($city_id)
    {
        $project=M("project_stats")->where('city_id='.$city_id)->Select();
        //echo json_encode($project);
        return json_encode($project);
    }
    //根据项目id判断项目类型
    public function checkType($project_id)
    {
        $project=M("project_stats")->where('id='.$project_id)->Select();
        return $project[0]['type'];
    }
    //根据project_id查询项目信息
    public function projectInfo($project_id)
    {
        $project=M("project_stats")->where('id='.$project_id)->Select();
        return json_encode($project);
    }
}