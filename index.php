<!DOCTYPE html>
<html lang="zh-CN" class="no-js no-svg">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Cache-Control" content="no-transform " />
<title>减笔猜词生成器</title>
<meta name="keywords" content="猜词,减笔,缺笔" />
<meta name="description" content="减笔猜词生成器" />
<style>
body,div,p,h1{ padding:0; margin:0; list-style:none;}
body{color:#222; font-size:14px; font-family:"微软雅黑";padding-top:10px;padding-bottom:56px;}
div{width: 95%;max-width:980px; margin:0px auto; line-height:42px;}
a{color: #222;text-decoration: none}
textarea{width: 95%;max-width:950px; height:180px;border:1px solid #ccc;border-radius: 8px;padding:10px;outline: none;}
div.btn{ text-align:center; height:60px; line-height:50px; }
div.btn input{ width:88px; height:33px; font-size:18px;}
p{ margin-left:28px;}
div.top{width: 100%;max-width:980px; height:45px; margin:0px auto; padding:12px 0px;}
div.top h1{ font-size:32px; font-weight:bold;}
.green{ color:#009900;}
.red{ color:#cc0000;}
.info{ padding:12px 8px;border:1px dashed #ccc; line-height:28px;border-radius: 8px;}
.info strong, #description strong{color:red;font-size:16px;}
.info span{font-size:16px;}
#prompt h3{padding: 3px;margin: 0;}
#description{padding: 12px 0px;line-height: 28px;}
.input{width: 95%;max-width:360px;height: 26px; border-radius:5px; border:1px solid #ccc;padding: 1px 6px;}
</style>
</head>

<body>

<div class="top"><h1>减笔猜词生成器</h1></div>

<form action="tzg.php" method="post">
<!--<div id="description">

	请先输入要拆的字
	
	
	</div>-->
	
<div id="prompt"><h3>请输入想要生成的汉字：</h3></div>
<?php
$words=$_POST['words1']??'';//返回值
echo '<div><textarea name="words">'.$words.'</textarea></div>';
?>
<div>田格类型：
<input type="radio" name="types" value="tzg">田字格&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="types" value="mzg" checked  >米字格&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
<div>田格颜色：
<input type="radio" name="bgcolor" value="green" ><span class="green">绿色</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="bgcolor" value="black" checked >黑色&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="bgcolor" value="red"><span class="red">红色
</span>
</div>

<div>文字颜色：
<input type="radio" name="zcolor" value="green" ><span class="green">绿色</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="zcolor" value="black" checked >黑色&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="zcolor" value="red"><span class="red">红色</span>
</div>


<div class="btn"><input type="submit" value="解析笔画" ></div>
</form>

</body>
</html>
