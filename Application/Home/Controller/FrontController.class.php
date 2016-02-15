<?php
/**
 * Created by PhpStorm.
 * User: P0017359
 * Date: 2016/2/4
 * Time: 9:35
 */

namespace Home\Controller;
use Think\Controller;

class FrontController extends  CommonController
{
    public function Projectlist(){
        layout('Layout/frontLayout');
        $this->display();
    }

    public  function Scrumlist(){
        layout('Layout/frontLayout');
        $this->display();
    }
}