<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function __construct(){
        parent::__construct();
        $this->uname = session('admin.uname');
        $this->user = D('user');
        $this->member = D('member');
        $this->memberGroup = D('memberGroup');
        $this->memberInfo = D('memberInfo');
    }

    public function index(){
        $setting = array(
            "title"=>"后台管理中心"
        );
        $this->assign("setting",$setting);
        $this->assign("uname",$this->uname);
        $this->display();
    }

    public function changePwd(){
        if($_POST['password']){
            if($this->user->setUser($this->uname,$_POST['password'])){
                session("admin.uname",null);
                $this->success('<script language="javascript">parent.location.reload();</script>');
            }else{
                $this->error("修改失败");
            }
        }else{
            $this->assign("uname",$this->uname);
            $this->display();
        }
    }

    public function createUser(){
        if($_POST['username']){
            $data=array(
                'uname'         => $_POST['username'],
                'upwd'          => md5(md5($_POST['password'])),
                'create_time'  => time()
            );
            if($this->user->createUser($data)){
                $this->success("创建成功");
            }else{
                $this->error("创建失败");
            }
        }else{
            $this->display();
        }
    }

    public function member(){
        if($_GET['doing']=='edit'){
            if($_POST['username']){
                $uid=$_POST['uid'];
                $m=array(
                    'username'=>$_POST['username'],
                    'phone'=>$_POST['phone'],
                    'email'=>$_POST['email']
                );
                $mi=array(
                    'nickname'=>$_POST['nickname'],
                    'sex'=>$_POST['sex'],
                    'card'=>$_POST['card'],
                    'm_id'=>$_POST['m_id']
                );
                $res1=$this->member->editMember($uid,$m);
                $res2=$this->memberInfo->editMemberInfo($uid,$mi);
                if($res1&&$res2){
                    $this->success("修改成功",U('Index/memberGroup'));
                }else{
                    $this->error("修改失败");
                }
            }else{
                $id=$_GET['id'];
                $mem=$this->member->getOneMember($id);
                $res=$this->memberGroup->getAllMemberGroup();;
                $this->assign('group',$res);
                $this->assign("member",$mem);
                $this->display("memberEdit");
            }
        }else{
            $mem = $this->member->getIndexMember();
            $this->assign("member",$mem);
            $this->display("memberList");
        }
    }

    public function memberGroup(){
        if($_GET['doing']=='add'){
            $this->memberGroupAdd($_GET,$_POST);
        }else if($_GET['doing']=='edit'){
            $this->memberGroupEdit($_GET,$_POST);
        }else if($_GET['doing']=='del'){
            $res=$this->memberGroup->delMemberGroup($_GET['id']);
            if($res){
                $this->success("删除成功",U('Index/memberGroup'));
            }else{
                $this->error("删除失败");
            }
        }else{
            $res=$this->memberGroup->getAllMemberGroup();;
            $this->assign('group',$res);
            $this->display();
        }
    }

    protected function memberGroupAdd($g,$p){
        if($p['group']){
            $res=$this->memberGroup->addMemberGroup($p);
            if($res){
                $this->success("新建成功",U('Index/memberGroup'));
            }else{
                $this->error("创建失败");
            }
        }else{
            $this->display("memberGroupAdd");
        }
    }
    protected function memberGroupEdit($g,$p){
        if($p['group']){
            $res=$this->memberGroup->editMemberGroup($g['id'],$p);
            if($res){
                $this->success('修改成功',U('Index/memberGroup'));
            }else{
                $this->error('修改失败');
            }
        }else{
            $res=$this->memberGroup->getOneMemberGroup($g['id']);
            $this->assign('group',$res);
            $this->display("memberGroupEdit");
        }
    }
}