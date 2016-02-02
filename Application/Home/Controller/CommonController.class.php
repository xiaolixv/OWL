<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 16-2-2
 * Time: 上午8:50
 */

namespace Home\Controller;
use Think\Controller;

class CommonController extends Controller
{
    public function _initialize(){
        if ($_SESSION["user"]["name"] == "" || $_SESSION["user"]["name"] == null) {
            //dump($_SESSION["user"]["name"]);
            $this->redirect("Home/Login/login");
        }
    }
}