<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理-登录</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/login.css" />
<script src="__PUBLIC__/Js/jquery.min.js"></script>
<script src="__PUBLIC__/Js/login.js" type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
<script language="JavaScript">
 function fleshVerify(){ 
    //重载验证码
    var time = new Date().getTime();
        document.getElementById('verifyImg').src= '__APP__/Public/verify/'+time;
 }
 </script>
</head>
<body>
<div id="loginpanelwrap">
    
    <div class="loginheader">
    <div class="logintitle"><a href="#">后台管理员登录</a></div>
    </div>

     
    <div class="loginform">
        <form action='__URL__/doLogin' method='post' name='LoginForm'>
            <div class="loginform_row">
            <label>Username:</label>
            <input type="text" class="loginform_input" name="user"/>
            </div>
            <div class="loginform_row">
            <label>Password:</label>
            <input type="password" class="loginform_input" name="password" />
            </div>
            <div class="loginform_row">
            <label> code :</label>
            <input type="text" class='loginform_verify' name="verify" /><img id='verifyImg' src='__APP__/Public/verify/' onclick="fleshVerify()" />
            </div>        
            <div class="loginform_row">
            <input type="submit" id='login' class="loginform_submit" value="Login" />
            </div> 
            <div class="clear"></div>
        </form>
    </div>
</div>       
</body>
</html>