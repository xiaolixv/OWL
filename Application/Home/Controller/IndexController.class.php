<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if($_SESSION["user"]["name"]==""||$_SESSION["user"]["name"]==null){
            //dump($_SESSION["user"]["name"]);
            $this->redirect("Home/Login/login");
        }else{
            layout('Layout/layout');
            $this->display();
        }
    }
}