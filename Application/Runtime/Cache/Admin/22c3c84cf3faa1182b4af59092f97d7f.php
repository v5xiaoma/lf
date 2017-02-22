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

<script src="/lf/Public/admin/js/pintuer.js"></script>
</head>
<body>
<form method="post" action="" id="listform">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 会员列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <li>搜索：</li>
        <li>首页
          <select name="s_ishome" class="input" onchange="changesearch()" style="width:60px; line-height:17px; display:inline-block">
            <option value="">选择</option>
            <option value="1">是</option>
            <option value="0">否</option>
          </select>
          &nbsp;&nbsp;
          推荐
          <select name="s_isvouch" class="input" onchange="changesearch()"  style="width:60px; line-height:17px;display:inline-block">
            <option value="">选择</option>
            <option value="1">是</option>
            <option value="0">否</option>
          </select>
          &nbsp;&nbsp;
          置顶
          <select name="s_istop" class="input" onchange="changesearch()"  style="width:60px; line-height:17px;display:inline-block">
            <option value="">选择</option>
            <option value="1">是</option>
            <option value="0">否</option>
          </select>
        </li>
        <?php if($iscid == 1): ?><li>
            <select name="cid" class="input" style="width:200px; line-height:17px;" onchange="changesearch()">
              <option value="">请选择分类</option>
              <option value="">产品分类</option>
              <option value="">产品分类</option>
              <option value="">产品分类</option>
              <option value="">产品分类</option>
            </select>
          </li><?php endif; ?>
        <li>
          <input type="text" placeholder="请输入搜索关键字" name="keywords" class="input" style="width:250px; line-height:17px;display:inline-block" />
          <a href="javascript:void(0)" class="button border-main icon-search" onclick="changesearch()" > 搜索</a></li>
      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
		  <th width="100">用户名</th>
		  <th width="10%">昵称</th>
		  <th>会员等级</th>
		  <th>性别</th>
		  <th>手机号</th>
		  <th>邮箱</th>
		  <th>卡号</th>
        <th width="310">操作</th>
      </tr>
      <?php if(is_array($member)): foreach($member as $k=>$v): ?><tr>
          <td><?php echo ($v['username']); ?></td>
          <td><?php echo ($v['nickname']); ?></td>
			<td><?php echo ($v['group']); ?></td>
          <td><?php echo ($v['sex']); ?></td>
          <td><?php echo ($v['phone']); ?></td>
          <td><?php echo ($v['email']); ?></td>
            <td><?php echo ($v['card']); ?></td>
          <td><div class="button-group">
			  <a class="button border-main" href="<?php echo U('Index/member',array('doing'=>'edit','id'=>$v['uid']));?>"><span class="icon-edit"></span> 修改</a>
			  <a class="button border-red" href="<?php echo U('Index/member',array('doing'=>'del','id'=>$v['uid']));?>"><span class="icon-trash-o"></span> 删除</a> </div>
		  </td>
        </tr><?php endforeach; endif; ?>
      <tr>
        <td colspan="8"><div class="pagelist"> <a href="">上一页</a> <span class="current">1</span><a href="">2</a><a href="">3</a><a href="">下一页</a><a href="">尾页</a> </div></td>
      </tr>
    </table>
  </div>
</form>
<script type="text/javascript">

</script>
</body>
</html>