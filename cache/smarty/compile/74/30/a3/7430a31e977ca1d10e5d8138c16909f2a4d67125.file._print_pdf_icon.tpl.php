<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 11:49:40
         compiled from "/opt/lampp/htdocs/hotelcommerce/admin292xpetpe/themes/default/template/controllers/orders/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181282354661209afc3ada67-87310562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7430a31e977ca1d10e5d8138c16909f2a4d67125' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/admin292xpetpe/themes/default/template/controllers/orders/_print_pdf_icon.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181282354661209afc3ada67-87310562',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61209afc3f74c1_32564207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61209afc3f74c1_32564207')) {function content_61209afc3f74c1_32564207($_smarty_tpl) {?>


<span class="btn-group-action">
	<span class="btn-group">
	<?php if (Configuration::get('PS_INVOICE')&&$_smarty_tpl->tpl_vars['order']->value->invoice_number) {?>
		<a class="btn btn-default _blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateInvoicePDF&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
">
			<i class="icon-file-text"></i>
		</a>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['order']->value->delivery_number) {?>
		<a class="btn btn-default _blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateDeliverySlipPDF&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
">
			<i class="icon-truck"></i>
		</a>
	<?php }?>
	</span>
</span>
<?php }} ?>
