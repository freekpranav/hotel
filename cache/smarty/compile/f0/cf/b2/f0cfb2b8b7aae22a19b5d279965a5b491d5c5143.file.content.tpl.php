<?php /* Smarty version Smarty-3.1.19, created on 2021-08-25 20:51:51
         compiled from "/opt/lampp/htdocs/hotelcommerce/admin292xpetpe/themes/default/template/controllers/localization/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19945922776126600f77c6d3-23989025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0cfb2b8b7aae22a19b5d279965a5b491d5c5143' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/admin292xpetpe/themes/default/template/controllers/localization/content.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19945922776126600f77c6d3-23989025',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6126600f829583_50858047',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6126600f829583_50858047')) {function content_6126600f829583_50858047($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert('Before changing the default currency, we strongly recommend that you enable maintenance mode because any change on default currency requires manual adjustment of the price of each product');
		});
	});
</script><?php }} ?>
