<?php
/**
 * Created by PhpStorm.
 * User: P0017359
 * Date: 2016/1/19
 * Time: 17:33
 */

namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller
{
   public function login(){
       $this->display();
   }

   public  function checkLogin(){
       $map["username"]=$_POST["username"];
       $map["password"]=MD5($_POST["password"]);
       $Model=D("User");
       $countUser=$Model->where($map)->find();
       if(count($countUser)>0){
           $userInfo["name"]=$countUser["username"];
           $userInfo["email"]=$countUser["email"];
           $userInfo["id"]=$countUser["_id"];
           $_SESSION["user"]=$userInfo;
           //$cache->set('people',array('name'=>'xiaobai','age'=>'23','gender'=>'wan'),12);
           $this->redirect("Home/Index/index");
       }else{
           $this->redirect("Home/Login/login");
       }
   }

   public function  registration(){
       $this->display();
   }

   public function  registerUser(){
       $Model=D("User");
       $Model->create();
       $Model->email=$_POST["email"];
       $Model->username=$_POST["username"];
       $Model->password=MD5($_POST["password"]);
       $Model->add();
       $this->redirect("login");
   }
}