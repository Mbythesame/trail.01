<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>photo profile</title>
<link rel="stylesheet" type="text/css" href="style/1/face.css"/>
<script type="text/javascript" src="JS/opener.js"></script>
</head>
<div id=face>
    <h3>choose your photo profile</h3>
    <dl>
 
    <?php 
    foreach (range(1, 9) as $num){ ?>
     <dd><img title="图像<?php echo $num?>" src="face/f0<?php echo $num ?>.jpg" alt="face/f0<?php echo $num ?>.jpg"/></dd> 
   <?php }?>
     <?php 
    foreach (range(10, 28) as $num){ ?>
     <dd><img title="图像<?php echo $num?>" src="face/f<?php echo $num ?>.jpg" alt="face/f<?php echo $num ?>.jpg"/></dd> 
   <?php }?>
   </dl>
</div>
<body>
</body>
</html>