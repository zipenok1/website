<?php 
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
if (isset($_POST['date'])) {$date = $_POST['date'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['commet'])) {$commet = $_POST['commet'];}

$myaddres  = "dmitrijkopejka5@gmail.com"; 
            
$mes = $name. ' ' .$phone. ' ' .$date. ' ' .$email. ' ' .$commet;
 
$send = mail ($myaddres,$mes, "Content-type:text/plain; charset = utf-8\r\nFrom:$email");
 
ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=index.html">
<meta name="generator">
<script type="text/javascript">
setTimeout('location.replace("/index.html")', 2);
</script> 
</head>
<body>
    
</body>
</html>