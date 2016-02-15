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
        layout('Layout/layout');
        $this->display();
    }

    public function AddMenu(){
        $Model=D("Menu");
        $Model->Create();
        $id=MD5(time());
        $Model->id=$id;
        $Model->add();
        $this->ajaxReturn($id,'JSON');
    }

    public function  DeleteMenu(){
        $Model=D("Menu");
       // echo("id=".I("post.id"));
        $map["pId"]=I("post.id");
        //$result=$Model->where($map)->select();
        //if($result->length>0){
        $Model->where($map)->delete();
        echo($Model->getLastSql());
        //}
        $rmap["id"]=I("post.id");
        //$r=$Model->where($rmap)->select();
        $Model->where($rmap)->delete();

        //$Model->where("id='".I("post.id")."''")->delete();
        //echo($Model->sql());
    }

    public function UpdateMenu(){
        $Model=D("Menu");
        $Model->Create();
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