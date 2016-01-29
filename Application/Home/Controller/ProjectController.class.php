<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 16-1-30
 * Time: 上午7:47
 */

namespace Home\Controller;
use Think\Controller;

class ProjectController extends Controller
{
    public  function  menulist()
    {
        if ($_SESSION["user"]["name"] == "" || $_SESSION["user"]["name"] == null) {
            //dump($_SESSION["user"]["name"]);
            $this->redirect("Home/Login/login");
        } else {

            layout('Layout/layout');
            $this->display();

        }
    }
}