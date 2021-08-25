<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 07:44:02
         compiled from "/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/modules/cheque/views/templates/hook/infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1827299140612092a2e2c5c9-57978531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9a52d64b08894fe37188e00bb78d3dd47686183' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/modules/cheque/views/templates/hook/infos.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1827299140612092a2e2c5c9-57978531',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612092a2e4ecd2_04935645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612092a2e4ecd2_04935645')) {function content_612092a2e4ecd2_04935645($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/cheque/cheque.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept payments by check.",'mod'=>'cheque'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses this payment method, the order status will change to 'Waiting for payment.'",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"You will need to manually confirm the order as soon as you receive a check.",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
