<!DOCTYPE HTML>
<html>
<head>
<title>我的第一个PHP程序</title>
<meta charset="utf-8">
</head>
<body>
<?php echo "Nice to meet you!"?>
<br>
<?php echo "服务器的时间:" .date("Y-m-d H:i:s"); ?>
<p>这是直接输出的内容</p>
<?php 
echo "这是一句假话"
?>
<br>
尽量不要用
<% echo "这也是php的语句"; %>
</body>
</html>
<?php 
echo "<br>";
echo "Nice to meet you";
//支持多种注释
//文档注释

/**
 * 文档注释
 */
$sysos = $_SERVER["SERVER_SOFTWARE"];
$phpversion = PHP_VERSION;
$nextline = "\n";
echo "<br>";
echo $sysos;
echo "<br>";
echo $phpversion;
echo "<br>";
$ifconfig = ` ls -la;php -v `;
echo "本机的一些网络信息:<pre>$ifconfig</pre>";
