<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 07:43:59
         compiled from "/opt/lampp/htdocs/hotelcommerce/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19068466546120929fe21973-16978753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5dcaf8c54e3e31eb19856da371ffcd47b2c6a43' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_node_folder.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19068466546120929fe21973-16978753',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_shop_group' => 0,
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6120929fe29335_40756000',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6120929fe29335_40756000')) {function content_6120929fe29335_40756000($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/opt/lampp/htdocs/hotelcommerce/tools/smarty/plugins/modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_shop_group']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;id_shop_group=<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
