<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 07:44:01
         compiled from "/opt/lampp/htdocs/hotelcommerce/admin/themes/default/template/helpers/list/list_action_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:951382859612092a1aa21a6-76451936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08e7a6a2133702f4bd6f3b941aa9c49cc14c5882' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/admin/themes/default/template/helpers/list/list_action_details.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '951382859612092a1aa21a6-76451936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'params' => 0,
    'id' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612092a1aab812_85651284',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612092a1aab812_85651284')) {function content_612092a1aab812_85651284($_smarty_tpl) {?>

<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" id="details_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['action'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="">
	<i class="icon-eye-open"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
