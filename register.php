<?php

define('ZM',true);


require dirname(__FILE__).'/include/common.inc.php'; 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>my blog--register</title>
<link rel="stylesheet" type="text/css" href="style/1/index.css" />
<link rel="stylesheet" type="text/css" href="style/1/basic.css" />
<link rel="stylesheet" type="text/css" href="style/1/register.css" />
<script type="text/javascript" src="JS/face.js"></script>
</head>
 <?php require ROOT_PATH.'/include/header.inc.php';?>
    <div id=register>
    <h2>会员注册</h2>
    
    <form method="post" action="register_post.php">
    <dl>
			<dt>请认真填写一下内容</dt>
			<dd> 用 户 名 ：<input type="text" name="username" class="text" />(*必填，至少两位)</dd>
			<dd>密　　码：<input type="password" name="password" class="text" />(*必填，至少六位)</dd>
			<dd>确认密码：<input type="password" name="notpassword" class="text" />(*必填，同上)</dd>
			<dd>密码提示：<input type="text" name="passt" class="text" />(*必填，至少两位)</dd>
			<dd>密码回答：<input type="text" name="passd" class="text" />(*必填，至少两位)</dd>
			<dd>性　　别：<input type="radio" name="sex" value="男" checked="checked" />男 <input type="radio" name="sex" value="女" />女</dd>
			<dd class="face"><img src="face/f01.jpg" alt="头像选择" onclick="javascript:window.open('face.php','face','width=400,height=400,top=0,left=0')" /></dd>
			<dd>电子邮件：<input type="text" name="email" class="text" /></dd>
			<dd>　Q Q 　：<input type="text" name="qq" class="text" /></dd>
			<dd>主页地址：<input type="text" name="url" class="text" value="http://" /></dd>
			<dd>验 证 码：<input type="text" name="yzm" class="text yzm"  /></dd>
			<dd><input type="submit" class="submit" value="注册" /></dd>
		</dl>
    </form>
    </div>
<body>
</body>
</html>