<?php
/**
 * Created by PhpStorm.
 * User: P0017359
 * Date: 2016/1/28
 * Time: 14:34
 */

namespace Home\Controller;
use Think\Controller;

class MenuController extends  Controller
{
    public function menu(){
        $this->display();
    }

    public function  menulist(){
        if($_SESSION["user"]["name"]==""||$_SESSION["user"]["name"]==null){
            //dump($_SESSION["user"]["name"]);
            $this->redirect("Home/Login/login");
        }else{

            layout('Layout/layout');
            $this->display();
        }
    }

    public function AddMenu(){
        $Model=D("Menu");
        $Model->Create();
        $Model->name=I("name");
        $Model->remark=I("remark");
        $Model->pId=I("pId");
        $id=MD5(time());
        $Model->id=$id;
        $Model->add();
        $this->ajaxReturn($id,'JSON');
    }

    public function UpdateMenu(){
        $Model=D("Menu");
        $Model->Create();
        $Model->name=I("name");
        $Model->remark=I("remark");
        $Model->id=I("id");
        $Model->pId=I("pId");
        $Model->_id=I("_id");
        $Model->save();
    }

    public function searchlist(){
        $Model=D('Menu');
        $result=$Model->where()->select();
        $r=array();
        $root["id"]="root";
        $root["name"]="根目录";
        $root["pid"]=null;
        array_push($r,$root);
        foreach($result as $id=>$value){
            array_push($r,$value);
        }
        $this->ajaxReturn($r,'JSON');
    }
}