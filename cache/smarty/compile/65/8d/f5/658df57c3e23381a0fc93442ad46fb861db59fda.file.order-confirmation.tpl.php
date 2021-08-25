<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 07:44:02
         compiled from "/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/modules/referralprogram/views/templates/hook/order-confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:802124987612092a28830c4-71267429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '658df57c3e23381a0fc93442ad46fb861db59fda' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/modules/referralprogram/views/templates/hook/order-confirmation.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '802124987612092a28830c4-71267429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sponsor_firstname' => 0,
    'sponsor_lastname' => 0,
    'discount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612092a2887c00_80749379',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612092a2887c00_80749379')) {function content_612092a2887c00_80749379($_smarty_tpl) {?>

<p class="success">
	<?php echo smartyTranslate(array('s'=>'Thanks to your order, your sponsor %1$s %2$s will earn a voucher worth %3$d off when this order is confirmed.','sprintf'=>array($_smarty_tpl->tpl_vars['sponsor_firstname']->value,$_smarty_tpl->tpl_vars['sponsor_lastname']->value,$_smarty_tpl->tpl_vars['discount']->value),'mod'=>'referralprogram'),$_smarty_tpl);?>

</p>
<br/><?php }} ?>
