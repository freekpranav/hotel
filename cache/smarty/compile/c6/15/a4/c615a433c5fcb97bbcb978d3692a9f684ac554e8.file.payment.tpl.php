<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 07:44:02
         compiled from "/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/modules/bankwire/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106622090612092a2438556-06399848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c615a433c5fcb97bbcb978d3692a9f684ac554e8' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/modules/bankwire/views/templates/hook/payment.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106622090612092a2438556-06399848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612092a2440053_57836827',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612092a2440053_57836827')) {function content_612092a2440053_57836827($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12">
		<p class="payment_module">
			<a class="bankwire" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('bankwire','payment'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
 <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'bankwire'),$_smarty_tpl);?>
</span>
			</a>
		</p>
	</div>
</div>
<?php }} ?>
