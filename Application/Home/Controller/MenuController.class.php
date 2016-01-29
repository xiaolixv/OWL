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
}