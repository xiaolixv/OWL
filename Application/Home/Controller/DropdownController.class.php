<?php
/**
 * Created by PhpStorm.
 * User: felix
 * Date: 16-2-2
 * Time: 下午1:06
 */

namespace Home\Controller;
use Org\Util\ArrayList;
use Think\Controller;

class DropdownController extends CommonController
{
    public function ProjectList(){
        $Model=D('Project');
        $result=$Model->where()->select();
        $r=array();
        foreach($result as $id=>$value) {
            $a=new ArrayList();
            $a->key=$value["_id"];
            $a->value=$value["name"];
            array_push($r, $a);
        }
        $this->ajaxReturn($r,'JSON');
    }
}