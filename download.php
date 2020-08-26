<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="//apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css">
  <script src="//apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="//apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<title>传输</title>
</head>
<?php
$path = "file.txt";
echo"<div class='alert alert-success'>选中压缩文件...</div>";
$filename = "file.zip";
echo"<div class='alert alert-success'>设置压缩包信息成功</div>";
$zip = new ZipArchive();
echo"<div class='alert alert-success'>实例化压缩请求成功</div>";
$zip->open($filename,ZipArchive::CREATE);   //打开压缩包
$zip->addFile($path,basename($path));   //向压缩包中添加文件
echo"<div class='alert alert-success'>写入压缩包</div>";
$zip->close();  //关闭压缩包
echo"<div class='alert alert-success'>关闭压缩包</div>";
echo"<div class='alert alert-success'>请求下载压缩包</div>";
echo"<script>alert('准备下载');";
header('Location: file.zip');
?>

<body>
</body>
</html>
