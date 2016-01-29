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
        if($_SESSION["user"]["name"]==""||$_SESSION["user"]["name"]==null){
            //dump($_SESSION["user"]["name"]);
            $this->redirect("Home/Login/login");
        }else{

            layout('Layout/layout');
            $this->display();
        }
    }
}