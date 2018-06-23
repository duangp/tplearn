<?php /* Smarty version Smarty-3.1.6, created on 2018-06-20 11:22:52
         compiled from "D:/phpStudy/WWW/tplearn/shop/Admin/View\Index\head.html" */ ?>
<?php /*%%SmartyHeaderCode:221545b29c88ce55739-16774639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1b447f7f95a8dcab84bac5c41d38761374fa5e3' => 
    array (
      0 => 'D:/phpStudy/WWW/tplearn/shop/Admin/View\\Index\\head.html',
      1 => 1529464899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '221545b29c88ce55739-16774639',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5b29c88ceb71c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b29c88ceb71c')) {function content_5b29c88ceb71c($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="<?php echo @CSS_URL;?>
/admin.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <table cellspacing=0 cellpadding=0 width="100%" 
               background="<?php echo @IMG_URL;?>
/header_bg.jpg" border=0>
            <tr height=56>
                <td width=260><img height=56 src="<?php echo @IMG_URL;?>
/header_left.jpg"
                                   width=260></td>
                <td style="font-weight: bold; color: #fff; padding-top: 20px" 
                    align=middle>当前用户：admin &nbsp;&nbsp; <a style="color: #fff" 
                                                        href="" 
                                                        target=main>修改口令</a> &nbsp;&nbsp; <a style="color: #fff" 
                                                        onclick="if (confirm('确定要退出吗？')) return true; else return false;" 
                                                        href="" target=_top>退出系统</a> 
                </td>
                <td align=right width=268><img height=56 
                                               src="<?php echo @IMG_URL;?>
/header_right.jpg" width=268></td></tr></table>
        <table cellspacing=0 cellpadding=0 width="100%" border=0>
            <tr bgcolor=#1c5db6 height=4>
                <td></td>
            </tr>
        </table>
    </body>
</html><?php }} ?>