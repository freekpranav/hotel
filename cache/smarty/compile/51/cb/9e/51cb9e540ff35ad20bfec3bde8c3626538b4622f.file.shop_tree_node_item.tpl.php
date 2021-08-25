<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 07:43:59
         compiled from "/opt/lampp/htdocs/hotelcommerce/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11821127586120929fe2b918-12335758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51cb9e540ff35ad20bfec3bde8c3626538b4622f' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_node_item.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11821127586120929fe2b918-12335758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_shop' => 0,
    'node' => 0,
    'url_shop_url' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6120929fe38f58_91988528',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6120929fe38f58_91988528')) {function content_6120929fe38f58_91988528($_smarty_tpl) {?>

<li class="tree-item">
	<label class="tree-item-name">
		<i class="tree-dot"></i>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_shop']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;shop_id=<?php echo $_smarty_tpl->tpl_vars['node']->value['id_shop'];?>
"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</a>
	</label>
	<?php if (isset($_smarty_tpl->tpl_vars['node']->value['urls'])) {?>
		<ul class="tree">
			<?php  $_smarty_tpl->tpl_vars['url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['url']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['node']->value['urls']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['url']->key => $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->_loop = true;
?>
			<li class="tree-item">
				<label class="tree-item-name">
					<i class="tree-dot"></i>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_shop_url']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;id_shop_url=<?php echo $_smarty_tpl->tpl_vars['url']->value['id_shop_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['url']->value['name'];?>
</a>
				</label>
			</li>
			<?php } ?>
		</ul>
	<?php }?>
</li><?php }} ?>
