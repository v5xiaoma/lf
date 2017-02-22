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
<div class="panel admin-panel">
    <div class="panel-head"><strong><span class="icon-key"></span> 创建会员组</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="<?php echo U('Index/memberGroup',array('doing'=>'add'));?>">
            <div class="form-group">
                <div class="label">
                    <label for="sitename">会员组名：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" id="mpass" name="group" size="50" placeholder="请输入会员组名"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">需要条件：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" id="mpass" name="by" size="50" placeholder="需要达到的条件，消费满多少？"/>
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