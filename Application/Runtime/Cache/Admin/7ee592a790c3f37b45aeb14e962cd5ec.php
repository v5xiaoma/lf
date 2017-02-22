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
        <form method="post" class="form-x" action="<?php echo U('Index/memberGroup',array('doing'=>'edit','id'=>$member['id']));?>">
            <div class="form-group">
                <div class="label">
                    <label for="sitename">用户名：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" id="" name="username" size="50" placeholder="请输入会员组名" value="<?php echo ($member['username']); ?>"/>
                    <input type="hidden" name="status" value="<?php echo ($member['uid']); ?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">会员组：</label>
                </div>
                <div class="field">
                    <select class="input w50" name="group">
                        <?php if(is_array($group)): foreach($group as $k=>$v): if($v['id']==$member['status']): ?><option value="$v['id']" selected=""><?php echo ($v['group']); ?></option>
                            <?php else: ?>
                                <option value="$v['id']"><?php echo ($v['group']); ?></option><?php endif; endforeach; endif; ?>
                    </select>
                    <!--<input type="text" class="input w50" id="" name="group" size="50" placeholder="请输入会员组名" value="<?php echo ($member['group']); ?>"/>-->
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">手机：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" id="" name="phone" size="50" placeholder="需要达到的条件，消费满多少？"  value="<?php echo ($member['phone']); ?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">邮箱：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" id="" name="email" size="50" placeholder="需要达到的条件，消费满多少？"  value="<?php echo ($member['email']); ?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">昵称：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" id="" name="nickname" size="50" placeholder="需要达到的条件，消费满多少？"  value="<?php echo ($member['nickname']); ?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">性别：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" id="" name="sex" size="50" placeholder="需要达到的条件，消费满多少？"  value="<?php echo ($member['sex']); ?>"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label for="sitename">卡号：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" id="" name="card" size="50" placeholder="需要达到的条件，消费满多少？"  value="<?php echo ($member['card']); ?>"/>
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