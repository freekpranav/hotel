<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 07:44:02
         compiled from "/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/modules/cheque/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:575717787612092a2ea3ec1-25132595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb17c5dc73e94e959069918181fa3631a0b6f269' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/modules/cheque/views/templates/hook/payment.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '575717787612092a2ea3ec1-25132595',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612092a2eacd47_05683748',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612092a2eacd47_05683748')) {function content_612092a2eacd47_05683748($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12">
        <p class="payment_module">
            <a class="cheque" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cheque','payment',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by check.','mod'=>'cheque'),$_smarty_tpl);?>
">
                <?php echo smartyTranslate(array('s'=>'Pay by check','mod'=>'cheque'),$_smarty_tpl);?>
 <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'cheque'),$_smarty_tpl);?>
</span>
            </a>
        </p>
    </div>
</div>
<?php }} ?>
