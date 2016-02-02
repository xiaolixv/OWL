<?php
/**
 * Created by PhpStorm.
 * User: P0017359
 * Date: 2016/1/27
 * Time: 15:10
 */

namespace Home\Controller;
use Think\Controller;

class RoleController extends  Controller
{
    public function  rolelist(){
        layout('Layout/layout');
        $this->display();
    }

    public function SearchRole(){
        $Model=D('Role');
        $result=$Model->where()->select();
        $r=array();
        foreach($result as $id=>$value){
            //$r.push($value);
            array_push($r,$value);
        }

        $this->ajaxReturn($r,'JSON');

    }

    public function AddRole(){
        $Model=D("Role");
        $Model->Create();
        $Model->name=I("name");
        $Model->describe=I("describe");
        $Model->add();
    }
}