<?php

define('ZM',true);


require dirname(__FILE__).'/include/common.inc.php'; 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>my blog</title>
<link rel="stylesheet" type="text/css" href="style/1/index.css" />
<link rel="stylesheet" type="text/css" href="style/1/basic.css" />
</head>

<body>
    <?php require ROOT_PATH.'/include/header.inc.php';?>
    <div id=list><h2>内容列表</h2></div>
    <div id=account><h2>个人用户</h2></div>
    <div id=photo><h2>最新图片</h2></div>
    <?php require ROOT_PATH.'/include/footer.inc.php';?>
        
    

</body>
</html>