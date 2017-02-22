<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title><?php echo ($setting['title']); ?></title>
<link rel="stylesheet" href="/lf/Public/admin/css/pintuer.css">
<link rel="stylesheet" href="/lf/Public/admin/css/admin.css">
<script src="/lf/Public/admin/js/jquery.js"></script>

</head>
<body>
<form method="post" action="">
    <div class="panel admin-panel">
        <div class="panel-head"><strong class="icon-reorder"> 留言管理</strong></div>
        <div class="padding border-bottom">
            <ul class="search">
                <li>
                    <a href="<?php echo U('Index/memberGroup',array('doing'=>'add'));?>" class="button border-blue">新建会员组</a>
                </li>
            </ul>
        </div>
        <table class="table table-hover text-center">
            <tr>
                <th>会员组</th>
                <th>条件</th>
                <th>操作</th>
            </tr>
            <?php if(is_array($group)): foreach($group as $k=>$v): ?><tr>
                    <td><?php echo ($v['group']); ?></td>
                    <td><?php echo ($v['by']); ?></td>
                    <td>
                        <div class="button-group"> <a class="button border-green" href="<?php echo U('Index/memberGroup',array('doing'=>'edit','id'=>$v['id']));?>"><span class="icon-trash-o"></span> 修改</a> </div>
                        <div class="button-group"> <a class="button border-red" href="<?php echo U('Index/memberGroup',array('doing'=>'del','id'=>$v['id']));?>"><span class="icon-trash-o"></span> 删除</a> </div>
                    </td>
                </tr><?php endforeach; endif; ?>
        </table>
    </div>
</form>
<script type="text/javascript">

//    function del(id){
//        if(confirm("您确定要删除吗?")){
//
//        }
//    }
//
//    $("#checkall").click(function(){
//        $("input[name='id[]']").each(function(){
//            if (this.checked) {
//                this.checked = false;
//            }
//            else {
//                this.checked = true;
//            }
//        });
//    })
//
//    function DelSelect(){
//        var Checkbox=false;
//        $("input[name='id[]']").each(function(){
//            if (this.checked==true) {
//                Checkbox=true;
//            }
//        });
//        if (Checkbox){
//            var t=confirm("您确认要删除选中的内容吗？");
//            if (t==false) return false;
//        }
//        else{
//            alert("请选择您要删除的内容!");
//            return false;
//        }
//    }

</script>
</body></html>