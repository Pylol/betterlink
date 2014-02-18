<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/style.css" />
<!-- jQuery file -->
<script src="__PUBLIC__/Js/jquery.min.js"></script>
<script src="__PUBLIC__/Js/jquery.tabify.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
var $ = jQuery.noConflict();
$(function() {
    $('#main_menu').tabify();
    $('#tabsmenu').tabify();
    $(".toggle_container").hide(); 
    $(".trigger").click(function(){
    	$(this).toggleClass("active").next().slideToggle("slow");
    	return false;
    });
});
</script>
</head>
<body>
<div id="panelwrap">
  	
	<div class="header">
        <div class="title"><a href="#">Betterlink Admin</a></div>
        
        <div class="header_right">Welcome Admin, <a href="#" class="settings">Settings</a> <a href="#" class="logout">Logout</a> </div>
        
        <div class="menu">
            <ul id="main_menu">
                <li class="active"><a href="#main_tab1" class="selected">企业信息管理</a></li>
                <li><a href="#main_tab2">ICT管理</a></li>
                <li><a href="#main_tab3">网站设计管理</a></li>
                <li><a href="#main_tab4">前台图片轮换设置</a></li>
                <li><a href="#main_tab5">招聘信息管理</a></li>
                <li><a href="#main_tab6">后台登陆管理</a></li>
            </ul>
        </div>
    
    </div>
    
    <div id="main_tab1" class="submenu">
        <ul>
        <li class="active"><a href="#content_tab1_1" class="selected">增加企业信息</a></li>
        <li><a href="#content_tab1_2">修改企业信息</a></li>
        </ul>
    </div>
    <div id="main_tab2" class="submenu">
        <ul>
        <li><a href="#content_tab2_1" class="selected">分类管理</a></li>
        <li><a href="#content_tab2_2">信息管理</a></li>
        </ul>
    </div>
    <div id="main_tab3" class="submenu">
        <ul>
<<<<<<< HEAD
        <li><a href="#" class="selected">分类管理</a></li>
        <li><a href="#">信息管理</a></li>
=======
        <li><a href="#content_tab3_1" class="selected">分类管理</a></li>
        <li><a href="#content_tab3_2">信息管理</a></li>
>>>>>>> 6587abceb4e6577247b46e92286dbc81209ccec6
        </ul>
    </div>
    <div id="main_tab4" class="submenu">
        <ul>
        <li><a href="#" class="selected">图片上传/下载</a></li>
        <li><a href="#">图片轮换相册管理</a></li>
        </ul>
    </div>
    <div id="main_tab5" class="submenu">
        <ul>
        <li><a href="#" class="selected">增加企业招聘信息</a></li>
        <li><a href="#">修改企业招聘信息</a></li>
        <li><a href="#">删除企业招聘信息</a></li>
        </ul>
    </div>
    <div id="main_tab6" class="submenu">
        <ul>
        <li><a href="#" class="selected">审核</a></li>
        <li><a href="#">管理用户</a></li>
        </ul>
    </div>
                    
    <div class="center_content" id="content_tab1_1">  
        <div class="right_wrap">
        <div class="right_content">             
            <h2>增加企业简介</h2>                                  
            <div class="form">
                
                <div class="form_row">
                <label>标题:</label>
                <input type="text" class="form_input" name="" />
                </div>
                <div class="form_row">
                <label>信息:</label>
                <textarea class="form_textarea" name=""></textarea>
                </div>
                <div class="form_row">
                <input type="submit" class="form_submit" value="Submit" />
                </div> 
                <div class="clear"></div>
            </div>

            <h2>增加企业新闻</h2>                                  
            <div class="form">
                
                <div class="form_row">
                <label>标题:</label>
                <input type="text" class="form_input" name="" />
                </div>
                <div class="form_row">
                <label>信息:</label>
                <textarea class="form_textarea" name=""></textarea>
                </div>
                <div class="form_row">
                <input type="submit" class="form_submit" value="Submit" />
                </div> 
                <div class="clear"></div>
            </div> 
        </div>
        </div><!-- end of right content-->
                         
                        
        <div class="sidebar" >
        <h2>企业信息</h2>
            <ul>
                <li><a href="#" class="selected">增加企业简介</a></li>
                <li><a href="#">增加企业新闻</a></li>
            </ul>
        
        </div>             
        
        
        <div class="clear"></div>
    </div> <!--end of center_content-->
    <div class="center_content" id="content_tab1_2">
        <div class="right_wrap">
        <div class="right_content">             
            <h2>修改企业简介</h2>                                
            <div class="form">
                
                <div class="form_row">
                <label>标题:</label>
                <input type="text" class="form_input" name="" />
                </div>
                <div class="form_row">
                <label>信息:</label>
                <textarea class="form_textarea" name=""></textarea>
                </div>
                <div class="form_row">
                <input type="submit" class="form_submit" value="Submit" />
                </div> 
            </div> 

            <h2>修改/删除新闻</h2>
            <table id="rounded-corner">
            <thead>
                <tr>
                    <th></th>
                    <th>标题</th>
                    <th>摘要</th>
                    <th>类别</th>
                    <th>发表日期</th>
                    <th>发表人</th>
                    <th>修改</th>
                    <th>删除</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd">
                    <td><input type="checkbox" name="" /></td>
                    <td>测试标题1</td>
                    <td>摘要</td>
                    <td>类别1</td>
                    <td>17/02/2014</td>
                    <td>管理员</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="even">
                    <td><input type="checkbox" name="" /></td>
                    <td>测试标题1</td>
                    <td>摘要</td>
                    <td>类别1</td>
                    <td>17/02/2014</td>
                    <td>管理员</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="odd">
                    <td><input type="checkbox" name="" /></td>
                    <td>测试标题1</td>
                    <td>摘要</td>
                    <td>类别1</td>
                    <td>17/02/2014</td>
                    <td>管理员</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="even">
                    <td><input type="checkbox" name="" /></td>
                    <td>测试标题1</td>
                    <td>摘要</td>
                    <td>类别1</td>
                    <td>17/02/2014</td>
                    <td>管理员</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="odd">
                    <td><input type="checkbox" name="" /></td>
                    <td>测试标题1</td>
                    <td>摘要</td>
                    <td>类别1</td>
                    <td>17/02/2014</td>
                    <td>管理员</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="even">
                    <td><input type="checkbox" name="" /></td>
                    <td>测试标题1</td>
                    <td>摘要</td>
                    <td>类别1</td>
                    <td>17/02/2014</td>
                    <td>管理员</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
            </tbody>
        </table>
        <div class="form_sub_buttons">
        <a href="#" class="button red">删除所有选中项</a>
        </div>
        </div>
        
        </div><!-- end of right content-->
        <div class="sidebar" >
        <h2>企业信息</h2>
            <ul>
                <li><a href="#" class="selected">修改企业简介</a></li>
                <li><a href="#">修改/删除企业新闻</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div><!-- end of a center_content-->

    <div class="center_content" id="content_tab2_1">
        <div class="right_wrap">
        <div class="right_content">                             
            <div class="form_row">
            <input type="submit" class="form_submit" value="添加新分类" style="float:left;" />
            </div> 

            <h2>修改/删除分类</h2>
            <table id="rounded-corner">
            <thead>
                <tr>
                    <th></th>
                    <th>类名</th>
                    <th>包含子类</th>
                    <th>修改</th>
                    <th>删除</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd">
                    <td><input type="checkbox" name="" /></td>
                    <td>分类1</td>
                    <td>小分类1,小分类2,小分类3</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="even">
                    <td><input type="checkbox" name="" /></td>
                    <td>分类1</td>
                    <td>小分类1,小分类2,小分类3</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="odd">
                    <td><input type="checkbox" name="" /></td>
                    <td>分类1</td>
                    <td>小分类1,小分类2,小分类3</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="even">
                    <td><input type="checkbox" name="" /></td>
                    <td>分类1</td>
                    <td>小分类1,小分类2,小分类3</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="odd">
                    <td><input type="checkbox" name="" /></td>
                    <td>分类1</td>
                    <td>小分类1,小分类2,小分类3</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="even">
                    <td><input type="checkbox" name="" /></td>
                    <td>分类1</td>
                    <td>小分类1,小分类2,小分类3</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
            </tbody>
        </table>
        <div class="form_sub_buttons">
        <a href="#" class="button red">删除所有选中项</a>
        </div>
        </div>
        
        </div><!-- end of right content-->
        <div class="sidebar" >
        <h2>分类管理</h2>
            <ul>
                <li><a href="#" class="selected">增加分类</a></li>
                <li><a href="#">修改/删除分类</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div><!--end of a center_content-->
    <div class="center_content" id="content_tab2_2">
        <div class="right_wrap">
        <div class="right_content">                             
            <h2>增加产品介绍</h2>                                  
            <div class="form">
                
                <div class="form_row">
                <label>标题:</label>
                <input type="text" class="form_input" name="" />
                </div>
                <div class="form_row">
                <label>信息:</label>
                <textarea class="form_textarea" name=""></textarea>
                </div>
                <div class="form_row">
                <input type="submit" class="form_submit" value="Submit" />
                </div> 
                <div class="clear"></div>
            </div>
            <h2>增加动态展示内容</h2>                                  
            <div class="form">
                
                <div class="form_row">
                <label>标题:</label>
                <input type="text" class="form_input" name="" />
                </div>
                <div class="form_row">
                <label>信息:</label>
                <textarea class="form_textarea" name=""></textarea>
                </div>
                <div class="form_row">
                <input type="submit" class="form_submit" value="Submit" />
                </div> 
                <div class="clear"></div>
            </div>
            <h2>增加解决方案内容</h2>                                  
            <div class="form">
                
                <div class="form_row">
                <label>标题:</label>
                <input type="text" class="form_input" name="" />
                </div>
                <div class="form_row">
                <label>信息:</label>
                <textarea class="form_textarea" name=""></textarea>
                </div>
                <div class="form_row">
                <input type="submit" class="form_submit" value="Submit" />
                </div> 
                <div class="clear"></div>
            </div>

            <h2>修改/删除产品介绍</h2>
            <table id="rounded-corner">
            <thead>
                <tr>
                    <th></th>
                    <th>产品名</th>
                    <th>介绍内容</th>
                    <th>修改</th>
                    <th>删除</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd">
                    <td><input type="checkbox" name="" /></td>
                    <td>产品1</td>
                    <td>产品介绍测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="even">
                    <td><input type="checkbox" name="" /></td>
                    <td>产品1</td>
                    <td>产品介绍测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="odd">
                    <td><input type="checkbox" name="" /></td>
                    <td>产品1</td>
                    <td>产品介绍测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="even">
                    <td><input type="checkbox" name="" /></td>
                    <td>产品1</td>
                    <td>产品介绍测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="odd">
                    <td><input type="checkbox" name="" /></td>
                    <td>产品1</td>
                    <td>产品介绍测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="even">
                    <td><input type="checkbox" name="" /></td>
                    <td>产品1</td>
                    <td>产品介绍测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
            </tbody>
        </table>
        <div class="form_sub_buttons">
        <a href="#" class="button red">删除所有选中项</a>
        </div>
        <h2>修改/删除动态展示内容</h2>
            <table id="rounded-corner">
            <thead>
                <tr>
                    <th></th>
                    <th>动态</th>
                    <th>内容</th>
                    <th>修改</th>
                    <th>删除</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd">
                    <td><input type="checkbox" name="" /></td>
                    <td>动态1</td>
                    <td>动态测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="even">
                    <td><input type="checkbox" name="" /></td>
                    <td>动态1</td>
                    <td>动态测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="odd">
                    <td><input type="checkbox" name="" /></td>
                    <td>动态1</td>
                    <td>动态测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="even">
                    <td><input type="checkbox" name="" /></td>
                    <td>动态1</td>
                    <td>动态测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="odd">
                    <td><input type="checkbox" name="" /></td>
                    <td>动态1</td>
                    <td>动态测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="even">
                    <td><input type="checkbox" name="" /></td>
                    <td>动态1</td>
                    <td>动态测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
            </tbody>
        </table>
        <div class="form_sub_buttons">
        <a href="#" class="button red">删除所有选中项</a>
        </div>
        <h2>修改/删除解决方案</h2>
            <table id="rounded-corner">
            <thead>
                <tr>
                    <th></th>
                    <th>解决方案名称</th>
                    <th>方案内容</th>
                    <th>修改</th>
                    <th>删除</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd">
                    <td><input type="checkbox" name="" /></td>
                    <td>解决方案</td>
                    <td>解决方案测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="even">
                    <td><input type="checkbox" name="" /></td>
                    <td>解决方案</td>
                    <td>解决方案测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="odd">
                    <td><input type="checkbox" name="" /></td>
                    <td>解决方案</td>
                    <td>解决方案测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="even">
                    <td><input type="checkbox" name="" /></td>
                    <td>解决方案</td>
                    <td>解决方案测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="odd">
                    <td><input type="checkbox" name="" /></td>
                    <td>解决方案</td>
                    <td>解决方案测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="even">
                    <td><input type="checkbox" name="" /></td>
                    <td>解决方案</td>
                    <td>解决方案测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
            </tbody>
        </table>
        <div class="form_sub_buttons">
        <a href="#" class="button red">删除所有选中项</a>
        </div>
        </div>
        
        </div><!-- end of right content-->
        <div class="sidebar" >
        <h2>信息管理</h2>
            <ul>
                <li><a href="#" class="selected">增加信息</a></li>
                <li><a href="#">修改/删除信息</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div><!--end of a center_content-->

<<<<<<< HEAD
=======
    <div class="center_content" id="content_tab3_1">
        <div class="right_wrap">
        <div class="right_content">                             
            <div class="form_row">
            <input type="submit" class="form_submit" value="添加新分类" style="float:left;" />
            </div> 

            <h2>修改/删除分类</h2>
            <table id="rounded-corner">
            <thead>
                <tr>
                    <th></th>
                    <th>类名</th>
                    <th>包含子类</th>
                    <th>修改</th>
                    <th>删除</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd">
                    <td><input type="checkbox" name="" /></td>
                    <td>分类1</td>
                    <td>小分类1,小分类2,小分类3</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="even">
                    <td><input type="checkbox" name="" /></td>
                    <td>分类1</td>
                    <td>小分类1,小分类2,小分类3</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="odd">
                    <td><input type="checkbox" name="" /></td>
                    <td>分类1</td>
                    <td>小分类1,小分类2,小分类3</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="even">
                    <td><input type="checkbox" name="" /></td>
                    <td>分类1</td>
                    <td>小分类1,小分类2,小分类3</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="odd">
                    <td><input type="checkbox" name="" /></td>
                    <td>分类1</td>
                    <td>小分类1,小分类2,小分类3</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="even">
                    <td><input type="checkbox" name="" /></td>
                    <td>分类1</td>
                    <td>小分类1,小分类2,小分类3</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
            </tbody>
        </table>
        <div class="form_sub_buttons">
        <a href="#" class="button red">删除所有选中项</a>
        </div>
        </div>
        
        </div><!-- end of right content-->
        <div class="sidebar" >
        <h2>分类管理</h2>
            <ul>
                <li><a href="#" class="selected">增加分类</a></li>
                <li><a href="#">修改/删除分类</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div><!--end of a center_content-->
    <div class="center_content" id="content_tab3_2">
        <div class="right_wrap">
        <div class="right_content">                             
            <h2>增加产品介绍</h2>                                  
            <div class="form">
                
                <div class="form_row">
                <label>标题:</label>
                <input type="text" class="form_input" name="" />
                </div>
                <div class="form_row">
                <label>信息:</label>
                <textarea class="form_textarea" name=""></textarea>
                </div>
                <div class="form_row">
                <input type="submit" class="form_submit" value="Submit" />
                </div> 
                <div class="clear"></div>
            </div>
            <h2>增加动态展示内容</h2>                                  
            <div class="form">
                
                <div class="form_row">
                <label>标题:</label>
                <input type="text" class="form_input" name="" />
                </div>
                <div class="form_row">
                <label>信息:</label>
                <textarea class="form_textarea" name=""></textarea>
                </div>
                <div class="form_row">
                <input type="submit" class="form_submit" value="Submit" />
                </div> 
                <div class="clear"></div>
            </div>
            <h2>增加解决方案内容</h2>                                  
            <div class="form">
                
                <div class="form_row">
                <label>标题:</label>
                <input type="text" class="form_input" name="" />
                </div>
                <div class="form_row">
                <label>信息:</label>
                <textarea class="form_textarea" name=""></textarea>
                </div>
                <div class="form_row">
                <input type="submit" class="form_submit" value="Submit" />
                </div> 
                <div class="clear"></div>
            </div>

            <h2>修改/删除产品介绍</h2>
            <table id="rounded-corner">
            <thead>
                <tr>
                    <th></th>
                    <th>产品名</th>
                    <th>介绍内容</th>
                    <th>修改</th>
                    <th>删除</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd">
                    <td><input type="checkbox" name="" /></td>
                    <td>产品1</td>
                    <td>产品介绍测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="even">
                    <td><input type="checkbox" name="" /></td>
                    <td>产品1</td>
                    <td>产品介绍测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="odd">
                    <td><input type="checkbox" name="" /></td>
                    <td>产品1</td>
                    <td>产品介绍测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="even">
                    <td><input type="checkbox" name="" /></td>
                    <td>产品1</td>
                    <td>产品介绍测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="odd">
                    <td><input type="checkbox" name="" /></td>
                    <td>产品1</td>
                    <td>产品介绍测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="even">
                    <td><input type="checkbox" name="" /></td>
                    <td>产品1</td>
                    <td>产品介绍测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
            </tbody>
        </table>
        <div class="form_sub_buttons">
        <a href="#" class="button red">删除所有选中项</a>
        </div>
        <h2>修改/删除动态展示内容</h2>
            <table id="rounded-corner">
            <thead>
                <tr>
                    <th></th>
                    <th>动态</th>
                    <th>内容</th>
                    <th>修改</th>
                    <th>删除</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd">
                    <td><input type="checkbox" name="" /></td>
                    <td>动态1</td>
                    <td>动态测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="even">
                    <td><input type="checkbox" name="" /></td>
                    <td>动态1</td>
                    <td>动态测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="odd">
                    <td><input type="checkbox" name="" /></td>
                    <td>动态1</td>
                    <td>动态测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="even">
                    <td><input type="checkbox" name="" /></td>
                    <td>动态1</td>
                    <td>动态测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="odd">
                    <td><input type="checkbox" name="" /></td>
                    <td>动态1</td>
                    <td>动态测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="even">
                    <td><input type="checkbox" name="" /></td>
                    <td>动态1</td>
                    <td>动态测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
            </tbody>
        </table>
        <div class="form_sub_buttons">
        <a href="#" class="button red">删除所有选中项</a>
        </div>
        <h2>修改/删除解决方案</h2>
            <table id="rounded-corner">
            <thead>
                <tr>
                    <th></th>
                    <th>解决方案名称</th>
                    <th>方案内容</th>
                    <th>修改</th>
                    <th>删除</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd">
                    <td><input type="checkbox" name="" /></td>
                    <td>解决方案</td>
                    <td>解决方案测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="even">
                    <td><input type="checkbox" name="" /></td>
                    <td>解决方案</td>
                    <td>解决方案测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="odd">
                    <td><input type="checkbox" name="" /></td>
                    <td>解决方案</td>
                    <td>解决方案测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="even">
                    <td><input type="checkbox" name="" /></td>
                    <td>解决方案</td>
                    <td>解决方案测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="odd">
                    <td><input type="checkbox" name="" /></td>
                    <td>解决方案</td>
                    <td>解决方案测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
                <tr class="even">
                    <td><input type="checkbox" name="" /></td>
                    <td>解决方案</td>
                    <td>解决方案测试内容。。</td>
                    <td><a href="#"><img src="__PUBLIC__/Images/edit.png" alt="" title="" border="0" /></a></td>
                    <td><a href="#"><img src="__PUBLIC__/Images/trash.gif" alt="" title="" border="0" /></a></td>
                </tr>
            </tbody>
        </table>
        <div class="form_sub_buttons">
        <a href="#" class="button red">删除所有选中项</a>
        </div>
        </div>
        
        </div><!-- end of right content-->
        <div class="sidebar" >
        <h2>信息管理</h2>
            <ul>
                <li><a href="#" class="selected">增加信息</a></li>
                <li><a href="#">修改/删除信息</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div><!--end of a center_content-->
>>>>>>> 6587abceb4e6577247b46e92286dbc81209ccec6

<script type="text/javascript">
    $(function(){
        // 点击小菜单，显示相应的功能块
        $(".center_content").hide();
        $("#content_tab1_1").show();
        $(".submenu ul li a, ").click(function(e){
            $(this).parent().siblings().children().removeClass("selected");
            $(this).addClass("selected");
            var targetDiv = $(this).attr("href");
            console.log(targetDiv);
            $(".center_content").hide();
            $(targetDiv).show();
            e.preventDefault();
        });
    });
</script>    	
</body>
</html>