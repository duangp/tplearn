<?php /* Smarty version Smarty-3.1.6, created on 2018-06-24 15:03:04
         compiled from "D:/phpStudy/WWW/tplearn/shop/Admin/View\Goods\update.html" */ ?>
<?php /*%%SmartyHeaderCode:151875b2e5a60f038a6-81825557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61a3c3ad06904a5a93f2424943299bb697327e6d' => 
    array (
      0 => 'D:/phpStudy/WWW/tplearn/shop/Admin/View\\Goods\\update.html',
      1 => 1529823778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151875b2e5a60f038a6-81825557',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5b2e5a61051d4',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2e5a61051d4')) {function content_5b2e5a61051d4($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改商品</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @CSS_URL;?>
/mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》修改商品信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/Goodslist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>商品名称</td>
                    <td><input type="text" name="name" value='<?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
' /></td>
                </tr>
                <tr>
                    <td>商品分类</td>
                    <td>
                        <select name="st_id">
                            <option>请选择</option>
                            <option>家用电器</option>
                            <option>手机数码</option>
                            <option>电脑办公</option>
                            <option>服饰鞋帽</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>商品品牌</td>
                    <td>
                        <select name="brand">
                            <option>请选择</option>
                            <option>苹果</option>
                            <option>诺基亚</option>
                            <option>HTC</option>
                            <option>摩托罗拉</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>商品价格</td>
                    <td><input type="text" name="price" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['price'];?>
" /></td>
                </tr>
                <tr>
                    <td>商品图片</td>
                    <td><input type="file" name="image" value="./img/2013-12-33.jpg" /></td>
                </tr>
                <tr>
                    <td>商品详细描述</td>
                    <td>
                        <textarea name="describe"><?php echo $_smarty_tpl->tpl_vars['info']->value[$_smarty_tpl->getVariable('smarty')->value['section']['describe']['index']];?>
</textarea>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="修改">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>