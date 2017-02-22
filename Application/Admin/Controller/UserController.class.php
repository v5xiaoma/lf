<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    public function login(){
        if(!session('admin.uname')){
            if($_POST['name']){
                $data=array(
                    'uname' => $_POST['name'],
                    'upwd'  => $_POST['password']
                );
                $user = D("User")->getUser($data['uname']);

                if($user){
                    if($user['upwd']==md5(md5($data['upwd']))){
                        session('admin.uname',$data['uname']);
                        $this->success("登陆成功，正在跳转！",U("Index/index"));
                    }else{
                        $this->error("密码不正确，请重新登陆！",U("User/login"));
                    }
                }else{
                    $this->error("用户名不存在，请重新登陆！",U("User/login"));
                }
            }else{
                $setting = array(
                    "title"=>"登录"
                );
                $this->assign("setting",$setting);
                $this->display();
            }
        }else{
            $this->success("您已经登录无需重复登录！",U("Index/index"));
        }
    }

    public function out(){
        session("admin.uname",null);
        $this->success("退出成功，请登录！",U("User/login"));
    }
}