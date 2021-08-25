<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 07:44:02
         compiled from "/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/modules/referralprogram/views/templates/hook/authentication.tpl" */ ?>
<?php /*%%SmartyHeaderCode:303238129612092a2864fa6-92994541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '729e3d2fa17347e2401d0ca747a760e582afb97c' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/modules/referralprogram/views/templates/hook/authentication.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303238129612092a2864fa6-92994541',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612092a286c694_52583741',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612092a286c694_52583741')) {function content_612092a286c694_52583741($_smarty_tpl) {?>

<!-- MODULE ReferralProgram -->
<fieldset class="account_creation">
	<h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
</h3>
	<p class="form-group">
		<label for="referralprogram"><?php echo smartyTranslate(array('s'=>'E-mail address of your sponsor','mod'=>'referralprogram'),$_smarty_tpl);?>
</label>
		<input class="form-control" type="text" size="52" maxlength="128" id="referralprogram" name="referralprogram" value="<?php if (isset($_POST['referralprogram'])) {?><?php echo htmlspecialchars($_POST['referralprogram'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
	</p>
</fieldset>
<!-- END : MODULE ReferralProgram --><?php }} ?>
