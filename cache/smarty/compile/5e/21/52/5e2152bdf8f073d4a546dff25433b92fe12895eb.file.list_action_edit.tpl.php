<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 07:44:01
         compiled from "/opt/lampp/htdocs/hotelcommerce/admin/themes/default/template/controllers/tax_rules/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165959484612092a16bdce5-31490994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e2152bdf8f073d4a546dff25433b92fe12895eb' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/admin/themes/default/template/controllers/tax_rules/helpers/list/list_action_edit.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165959484612092a16bdce5-31490994',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612092a16c26e5_17624206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612092a16c26e5_17624206')) {function content_612092a16c26e5_17624206($_smarty_tpl) {?>
<a onclick="loadTaxRule('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
'); return false;" href="#" class="btn btn-default">
	<i class="icon-pencil"></i>
	<?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
