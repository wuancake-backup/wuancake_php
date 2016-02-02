<?php
/* Smarty version 3.1.29, created on 2015-12-27 17:55:52
  from "F:\Jianbing_PHP\xiaobai\test\MVC\MVC\test\tpl\test.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_567fb5a85fa6a7_00675813',
  'file_dependency' => 
  array (
    '426b7a1a9d2f99a8c921fec51c2400f886cfd85e' => 
    array (
      0 => 'F:\\Jianbing_PHP\\xiaobai\\test\\MVC\\MVC\\test\\tpl\\test.tpl',
      1 => 1451210149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_567fb5a85fa6a7_00675813 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '24088567fb5a85a3c97_76218672';
if ($_smarty_tpl->tpl_vars['score']->value > 90) {?>
优秀
<?php } elseif ($_smarty_tpl->tpl_vars['score']->value > 60) {?>
及格
<?php } else { ?>
不及格
<?php }
}
}
