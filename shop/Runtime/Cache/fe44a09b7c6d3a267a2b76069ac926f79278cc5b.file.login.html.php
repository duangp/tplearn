<?php /* Smarty version Smarty-3.1.6, created on 2018-07-08 16:36:29
         compiled from "D:/phpStudy/WWW/tplearn/shop/Admin/View\Manager\login.html" */ ?>
<?php /*%%SmartyHeaderCode:20315b3dc5560ac5a8-03647765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe44a09b7c6d3a267a2b76069ac926f79278cc5b' => 
    array (
      0 => 'D:/phpStudy/WWW/tplearn/shop/Admin/View\\Manager\\login.html',
      1 => 1530788224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20315b3dc5560ac5a8-03647765',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5b3dc5561bdce',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3dc5561bdce')) {function content_5b3dc5561bdce($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta content="MSHTML 6.00.6000.16674" name="GENERATOR" />

        <title>用户登录</title>

        <link href="<?php echo @CSS_URL;?>
/User_Login.css" rel="stylesheet" type="text/css" />
    </head><body id="userlogin_body">
        <div></div>
        <div id="user_login">
            <dl>
                <dd id="user_top">
                    <ul>
                        <li class="user_top_l"></li>
                        <li class="user_top_c"></li>
                        <li class="user_top_r"></li></ul>
                </dd><dd id="user_main">
                    <form action="#" method="post">
                        <ul>
                            <li class="user_main_l"></li>
                            <li class="user_main_c">
                                <div class="user_main_box">
                                    <ul>
                                        <li class="user_main_text">用户名： </li>
                                        <li class="user_main_input">
                                            <input class="TxtUserNameCssClass" id="admin_user" maxlength="20" name="admin_user"> </li></ul>
                                    <ul>
                                        <li class="user_main_text">密&nbsp;&nbsp;&nbsp;&nbsp;码： </li>
                                        <li class="user_main_input">
                                            <input class="TxtPasswordCssClass" id="admin_psd" name="admin_psd" type="password">
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="user_main_text">验证码： </li>
                                        <li class="user_main_input">
                                            <input class="TxtValidateCodeCssClass" id="captcha" name="" type="text">
                                            <img src="<?php echo @__CONTROLLER__;?>
/verify_img"
                                                 onclick="this.src='<?php echo @__CONTROLLER__;?>
/verify_img'" alt="" />
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="user_main_r">

                                <input style="border: medium none; background: url('<?php echo @IMG_URL;?>
/user_botton.gif') repeat-x scroll left top transparent; height: 122px; width: 111px; display: block; cursor: pointer;" value="" type="submit">
                            </li>
                        </ul>
                    </form>
                </dd><dd id="user_bottom">
                    <ul>
                        <li class="user_bottom_l"></li>
                        <li class="user_bottom_c"><span style="margin-top: 40px;"></span> </li>
                        <li class="user_bottom_r"></li></ul></dd></dl></div><span id="ValrUserName" style="display: none; color: red;"></span><span id="ValrPassword" style="display: none; color: red;"></span><span id="ValrValidateCode" style="display: none; color: red;"></span>
        <div id="ValidationSummary1" style="display: none; color: red;"></div>
    </body>
</html><?php }} ?>