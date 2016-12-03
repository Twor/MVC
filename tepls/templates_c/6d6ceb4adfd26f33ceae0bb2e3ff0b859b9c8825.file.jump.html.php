<?php /* Smarty version Smarty-3.1.18, created on 2016-11-29 17:17:14
         compiled from "libs\jump\jump.html" */ ?>
<?php /*%%SmartyHeaderCode:24763583d282910a8d3-19678821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d6ceb4adfd26f33ceae0bb2e3ff0b859b9c8825' => 
    array (
      0 => 'libs\\jump\\jump.html',
      1 => 1480410762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24763583d282910a8d3-19678821',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_583d282934fa53_26835840',
  'variables' => 
  array (
    'time' => 0,
    'url' => 0,
    'watetime' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583d282934fa53_26835840')) {function content_583d282934fa53_26835840($_smarty_tpl) {?><meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
;url=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"/>
<?php if ($_smarty_tpl->tpl_vars['watetime']->value==0) {?>
<div style="color: green"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
秒后<a href='index.php'>跳转！</a></div>
<?php } else { ?>
<div style="color: red">密码错误！,<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
秒后<a href='tepls/templates/dologin.html'>跳转！</a></div>
<?php }?><?php }} ?>
