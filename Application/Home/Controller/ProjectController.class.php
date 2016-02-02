<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 16-1-30
 * Time: 上午7:47
 */

namespace Home\Controller;
use Think\Controller;

class ProjectController extends CommonController
{

    public  function  projectlist()
    {
        layout('Layout/layout');
        $this->display();
    }

    public function SearchProject(){
        $map["name"]=array('like',I("get.name"));
        $Model=D('Project');
        $result=$Model->where($map)->select();
        $r=array();
        foreach($result as $id=>$value) {
            array_push($r, $value);
        }
        S($_SESSION["user"]["id"]."projectCache",$r);
        $this->ajaxReturn($r,'JSON');

    }

    public function AddProject(){
        $id=$_SESSION["user"]["id"];
        $Model=D("Project");
        $Model->Create();
        $Model->ownerid=$id;
        $Model->add();
    }

    public function StoryList(){
        layout('Layout/layout');
        $this->display();
    }

    public function ScrumList(){
        layout('Layout/layout');
        $this->display();
    }

    public function AddScrum(){
        $Model=D("Scrum");
        $Model->create();
        $Model->add();
    }


}