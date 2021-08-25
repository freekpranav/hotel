<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 11:32:26
         compiled from "/opt/lampp/htdocs/hotelcommerce/modules/hotelreservationsystem/views/templates/hook/copyRight.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1182628454612096f2aadb62-05218160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17078385ee182cdc8b587ee86a94d171190b3e08' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/modules/hotelreservationsystem/views/templates/hook/copyRight.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1182628454612096f2aadb62-05218160',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WK_HTL_ESTABLISHMENT_YEAR' => 0,
    'base_dir' => 0,
    'WK_HTL_CHAIN_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612096f2aba1f8_60234215',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612096f2aba1f8_60234215')) {function content_612096f2aba1f8_60234215($_smarty_tpl) {?><div class="copyRightWrapper">
	<p class="copyRight">
		&copy; <?php echo $_smarty_tpl->tpl_vars['WK_HTL_ESTABLISHMENT_YEAR']->value;?>
-<?php echo date('Y');?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
">&nbsp;Vugha
</a>.&nbsp;<?php echo smartyTranslate(array('s'=>' All rights reserved.','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>

	</p>
</div><?php }} ?>
