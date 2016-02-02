<?php
/* Smarty version 3.1.29, created on 2015-12-27 19:35:25
  from "F:\Jianbing_PHP\xiaobai\test\MVC\MVC\test\tpl\utime.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_567fccfde6d115_61258239',
  'file_dependency' => 
  array (
    '726412c77895a96ebe069011b82c114933770245' => 
    array (
      0 => 'F:\\Jianbing_PHP\\xiaobai\\test\\MVC\\MVC\\test\\tpl\\utime.tpl',
      1 => 1451216123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_567fccfde6d115_61258239 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_test')) require_once 'F:\\Jianbing_PHP\\xiaobai\\test\\MVC\\MVC\\MVC\\plugins\\modifier.test03.php';
echo smarty_modifier_test($_smarty_tpl->tpl_vars['time']->value,'Y-m-d H-m-s');
}
}
