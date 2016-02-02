<?php
/* Smarty version 3.1.29, created on 2015-12-27 19:58:25
  from "F:\Jianbing_PHP\xiaobai\test\MVC\MVC\test\tpl\content.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_567fd2619b8a76_46270922',
  'file_dependency' => 
  array (
    '2a148a36feef4ea97c831d6bb1a01e39451a6e31' => 
    array (
      0 => 'F:\\Jianbing_PHP\\xiaobai\\test\\MVC\\MVC\\test\\tpl\\content.tpl',
      1 => 1451217503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_567fd2619b8a76_46270922 ($_smarty_tpl) {
if (!is_callable('smarty_block_test1')) require_once 'F:\\Jianbing_PHP\\xiaobai\\test\\MVC\\MVC\\MVC\\plugins\\block.test1.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('test1', array('replace'=>'true','maxnum'=>28)); $_block_repeat=true; echo smarty_block_test1(array('replace'=>'true','maxnum'=>28), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo $_smarty_tpl->tpl_vars['str']->value;?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_test1(array('replace'=>'true','maxnum'=>28), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php }
}
