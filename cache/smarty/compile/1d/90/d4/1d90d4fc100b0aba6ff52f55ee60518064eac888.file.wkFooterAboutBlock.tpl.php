<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 11:32:25
         compiled from "/opt/lampp/htdocs/hotelcommerce/modules/wkfooteraboutblock/views/templates/hook/wkFooterAboutBlock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1402823842612096f1e1a618-88208521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d90d4fc100b0aba6ff52f55ee60518064eac888' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/modules/wkfooteraboutblock/views/templates/hook/wkFooterAboutBlock.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1402823842612096f1e1a618-88208521',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WK_HTL_SHORT_DESC' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612096f1e1f4b8_73855910',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612096f1e1f4b8_73855910')) {function content_612096f1e1f4b8_73855910($_smarty_tpl) {?>

<div class="row">
	<section class="col-xs-12 col-sm-12">
		<div class="row margin-lr-0 footer-section-heading">
			<p><?php echo smartyTranslate(array('s'=>'About','mod'=>'wkfooteraboutblock'),$_smarty_tpl);?>
</p>
			<hr/>
		</div>
		<div class="row margin-lr-0 footer-about-hotel">
			<p><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['WK_HTL_SHORT_DESC']->value,220,'',true), ENT_QUOTES, 'UTF-8', true);?>
</p>
		</div>
	</section>
</div><?php }} ?>
