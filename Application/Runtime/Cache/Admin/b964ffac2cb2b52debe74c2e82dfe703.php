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
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-key"></span> 创建管理员账号</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo U('Index/createUser');?>">
      <div class="form-group">
        <div class="label">
          <label for="sitename">用户名：</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" name="username" size="50" placeholder="请输入新密码" />
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label for="sitename">密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" name="password" size="50" placeholder="请输入新密码" data-validate="required:请输入新密码,length#>=3:新密码不能小于3位" />
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label for="sitename">密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" name="repassword" size="50" placeholder="请再次输入新密码" data-validate="required:请再次输入新密码,repeat#password:两次输入的密码不一致" />
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>   
        </div>
      </div>      
    </form>
  </div>
</div>
</body></html>