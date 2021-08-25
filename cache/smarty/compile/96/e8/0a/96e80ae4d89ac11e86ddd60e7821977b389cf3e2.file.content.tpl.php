<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 07:43:59
         compiled from "/opt/lampp/htdocs/hotelcommerce/admin/themes/default/template/controllers/shop/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21092029426120929fe3b735-37315187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96e80ae4d89ac11e86ddd60e7821977b389cf3e2' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/admin/themes/default/template/controllers/shop/content.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21092029426120929fe3b735-37315187',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6120929fe3dfa3_02116184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6120929fe3dfa3_02116184')) {function content_6120929fe3dfa3_02116184($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
