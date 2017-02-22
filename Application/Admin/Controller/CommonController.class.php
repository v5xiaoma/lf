<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller{
    public function _initialize(){
        if(!session("admin.uname")){
            $this->success("您还未登录，请登录！",U('User/login'));
            die;
        }
    }
}