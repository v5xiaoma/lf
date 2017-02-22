<?php
namespace Admin\Model;
use Think\Model;
class MemberGroupModel extends Model{
    public function addMemberGroup($data){
        return $this->add($data);
    }
    public function getAllMemberGroup(){
        return $this->select();
    }
    public function getOneMemberGroup($w){
        $where['id']=$w;
        return $this->where($where)->find();
    }
    public function editMemberGroup($w,$data){
        $where['id']=$w;
        return $this->where($where)->save($data);
    }
    public function delMemberGroup($w){
        $where['id']=$w;
        return $this->where($where)->delete();
    }
}