<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 07:44:02
         compiled from "/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/modules/blockcustomerprivacy/blockcustomerprivacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:654570517612092a2b7bca3-01312113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa7957017db438067212b8c3b646c690b13f4a57' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/modules/blockcustomerprivacy/blockcustomerprivacy.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '654570517612092a2b7bca3-01312113',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'privacy_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612092a2b86765_94432254',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612092a2b86765_94432254')) {function content_612092a2b86765_94432254($_smarty_tpl) {?>

<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy">
	<h3 class="page-subheading">
		<?php echo smartyTranslate(array('s'=>'Customer data privacy','mod'=>'blockcustomerprivacy'),$_smarty_tpl);?>

	</h3>
	<div style="width:21px; float:left;">
		<div class="required checkbox">
			<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" autocomplete="off"/>
		</div>
	</div>
	<div style="width: 92%; float: left; margin-top: 8px;">
        <label for="customer_privacy" style="font-weight: normal;"><?php echo $_smarty_tpl->tpl_vars['privacy_message']->value;?>
</label>				
	</div>
</fieldset><?php }} ?>
