<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="//apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css">
  <script src="//apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="//apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<title>传输</title>
</head>
<form name="form" method="post">


<?php
$myfile = fopen("file.txt", "r") or die("Unable to open file!");
@ $file=fread($myfile,filesize("file.txt"));

echo "<textarea name='text' rows='20' cols='140'>$file</textarea>";
fclose($myfile);

?>
<a href="" class="btn btn-default btn" role="button">更新</a>

<button name="save" type="submit" class="btn btn-default">保存</button>
<a href="download.php" class="btn btn-default btn" role="button">下载文件</a>
</form>

<?php 
if(empty($_POST["submit"])){
  $myfile = fopen("file.txt", "w") or die("Unable to open file!");
  $txt = $_POST["text"];
  fwrite($myfile, $txt);
  fclose($myfile);
echo"<div class='alert alert-success alert-dismissable'>
   <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
   看不顺眼就点我   </button>
   成功！很好地完成了提交(这也可能是初始化成功的意思)。</div>";
}

?>
<hr>
<p>先点击“更新”,获取文件内容，更改完后点击“保存”，以进行保存</p>

<body>
</body>
</html>
