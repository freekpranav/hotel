<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 07:44:00
         compiled from "/opt/lampp/htdocs/hotelcommerce/admin/themes/default/template/controllers/products/specific_prices_shop_update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1373810596612092a0a03514-53166594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ccff00295556230adb10922bbfd2139a18aa180' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/admin/themes/default/template/controllers/products/specific_prices_shop_update.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1373810596612092a0a03514-53166594',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'option_list' => 0,
    'key_id' => 0,
    'row' => 0,
    'key_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612092a0a0ad43_63321367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612092a0a0ad43_63321367')) {function content_612092a0a0ad43_63321367($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<option value="<?php echo intval($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key_id']->value]);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value[$_smarty_tpl->tpl_vars['key_value']->value], ENT_QUOTES, 'UTF-8', true);?>
</option>
<?php } ?><?php }} ?>
