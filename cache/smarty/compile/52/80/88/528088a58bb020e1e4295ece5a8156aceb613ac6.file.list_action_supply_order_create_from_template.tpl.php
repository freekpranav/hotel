<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 07:44:01
         compiled from "/opt/lampp/htdocs/hotelcommerce/admin/themes/default/template/helpers/list/list_action_supply_order_create_from_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95333247612092a1a8d411-96865512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '528088a58bb020e1e4295ece5a8156aceb613ac6' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/admin/themes/default/template/helpers/list/list_action_supply_order_create_from_template.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95333247612092a1a8d411-96865512',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612092a1a93961_27964318',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612092a1a93961_27964318')) {function content_612092a1a93961_27964318($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
');" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-copy"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
