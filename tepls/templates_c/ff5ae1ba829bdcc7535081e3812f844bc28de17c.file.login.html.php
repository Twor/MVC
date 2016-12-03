<?php /* Smarty version Smarty-3.1.18, created on 2016-11-29 15:02:45
         compiled from "TEPLS\templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:21735583d2807154dd7-53015398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff5ae1ba829bdcc7535081e3812f844bc28de17c' => 
    array (
      0 => 'TEPLS\\templates\\login.html',
      1 => 1480402963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21735583d2807154dd7-53015398',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_583d2807187468_26626276',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583d2807187468_26626276')) {function content_583d2807187468_26626276($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="tepls/templates/common/style/style.css"/>
<link rel="stylesheet" type="text/css" href="tepls/templates/common/style/loginreg.css"/>
<link rel="stylesheet" type="text/css" href="tepls/templates/font/font.css">
</head>

<body>
<div class="reg_top">
    <div class="section rel">
    	<div class="clears"></div> 
    	<div class="reg_logo">
        	<a href="index.html">&nbsp;</a>
        </div>
        <h1>登录</h1>
    </div>
</div>
<!--主体内容-->
<div class="section reg_body">
	<form action="?ap=login&md=doLogin" id="myform" method="post">
    	<table border="0" class="pd10_bg f16" style="margin-left:210px; line-height:36px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="120" align="right">用户名：</td>
                <td>
                	<div class="form_e">
                		<input type="text" class="inputs w260"  id="username" name="username" />
                	</div>
                </td>
              </tr>
              <tr>
                <td width="120" align="right">密   码：</td>
                <td>
                	<div class="form_e">
                		<input type="password" class="inputs w260"  id="password" name="password" />
                	</div>
                </td>
              </tr>
               <tr>
                <td width="120" align="right">验证码：</td>
                <td>
                	<div class="form_e">
                        <input type="text" class="inputs w120 fl" id="yzm" name="yzm" />
                        <img class="fl" src="tepls/templates/temp/yzm.jpg" width="140" height="38"  alt=""/>
                	</div>
                </td>
              </tr>
               <tr>
                <td width="120" align="right"> </td>
                <td>
                	<input type="submit" value="登 录" class="btn w140 login_btn" />
                   
                </td>
              </tr>
        </table> 
    </form>
</div>
<!--主体内容 end-->

<script type="text/javascript" src="tepls/templates/common/scripts/jquery-1.11.2.min.js"></script> 
<script type="text/javascript" src="tepls/templates/common/scripts/jquery.validate.min.js"></script>
<script type="text/javascript" src="tepls/templates/common/scripts/v_cn.js"></script>
<script type="text/javascript" src="tepls/templates/common/scripts/yanzheng.js"></script>
</body>
</html>
<?php }} ?>
