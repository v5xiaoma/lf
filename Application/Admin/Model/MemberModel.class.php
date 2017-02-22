<?php
namespace Admin\Model;
use Think\Model;

class MemberModel extends Model{
    protected $tableName = "member";

    public function getIndexMember(){
        $field='uid,username,phone,email,nickname,sex,card,group';
        return $this->join("__MEMBER_INFO__ ON __MEMBER__.uid=__MEMBER_INFO__.m_id","LEFT")->join("__MEMBER_GROUP__ ON __MEMBER__.status=__MEMBER_GROUP__.id","LEFT")->field($field)->select();
    }
    public function getAllMember(){
        return $this->join("__MEMBER_INFO__ ON __MEMBER__.uid=__MEMBER_INFO__.m_id","LEFT")->join("__MEMBER_GROUP__ ON __MEMBER__.status=__MEMBER_GROUP__.id","LEFT")->select();
    }
    public function getOneMember($w){
        $where['uid']=$w;
        $field='uid,username,phone,email,nickname,sex,card,group,status';
        return $this->where($where)->join("__MEMBER_INFO__ ON __MEMBER__.uid=__MEMBER_INFO__.m_id","LEFT")->join("__MEMBER_GROUP__ ON __MEMBER__.status=__MEMBER_GROUP__.id","LEFT")->field($field)->find();
    }
    public function editMember($w,$data){
        $where['uid']=$w;
        return $this->where($where)->save($data);
    }
}