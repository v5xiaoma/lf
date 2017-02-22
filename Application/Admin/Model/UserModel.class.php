<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model{
    protected $tableName = "admin_user";

    public function getUser($data){
        $where['uname']=$data;
        $user = $this->where($where)->find();
        if($user){
            return $user;
        }else{
            return false;
        }
    }

    public function setUser($w,$d){
        $where['uname']=$w;
        $data['upwd']=md5(md5($d));
        $result = $this->where($where)->save($data);
        if($result){
            return true;
        }else{
            return false;
        }
    }

    public function createUser($d){
        $result = $this->add($d);
        if($result){
            return true;
        }else{
            return false;
        }
    }
}
