<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 11:41:34
         compiled from "/opt/lampp/htdocs/hotelcommerce/mails/en/booking_extra_demands_text.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1914382931612099166234c5-05701392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69a457adb34cad096331a768cd58bdbdaa09fde1' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/mails/en/booking_extra_demands_text.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1914382931612099166234c5-05701392',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'data_v' => 0,
    'rm_v' => 0,
    'roomDemand' => 0,
    'roomCount' => 0,
    'demand' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6120991663eaf3_48170219',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6120991663eaf3_48170219')) {function content_6120991663eaf3_48170219($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/lampp/htdocs/hotelcommerce/tools/smarty/plugins/modifier.date_format.php';
?><?php if (isset($_smarty_tpl->tpl_vars['list']->value)) {?>
<?php echo smartyTranslate(array('s'=>'Extra Demands Details'),$_smarty_tpl);?>

<?php echo smartyTranslate(array('s'=>'Room Type'),$_smarty_tpl);?>

<?php echo smartyTranslate(array('s'=>'Extra demand name'),$_smarty_tpl);?>

<?php echo smartyTranslate(array('s'=>'Total'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'(Tax excl.)'),$_smarty_tpl);?>


<?php  $_smarty_tpl->tpl_vars['data_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data_v']->_loop = false;
 $_smarty_tpl->tpl_vars['data_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data_v']->key => $_smarty_tpl->tpl_vars['data_v']->value) {
$_smarty_tpl->tpl_vars['data_v']->_loop = true;
 $_smarty_tpl->tpl_vars['data_k']->value = $_smarty_tpl->tpl_vars['data_v']->key;
?>
<?php  $_smarty_tpl->tpl_vars['rm_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rm_v']->_loop = false;
 $_smarty_tpl->tpl_vars['rm_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data_v']->value['date_diff']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rm_v']->key => $_smarty_tpl->tpl_vars['rm_v']->value) {
$_smarty_tpl->tpl_vars['rm_v']->_loop = true;
 $_smarty_tpl->tpl_vars['rm_k']->value = $_smarty_tpl->tpl_vars['rm_v']->key;
?>
<?php if (isset($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands'])&&$_smarty_tpl->tpl_vars['rm_v']->value['extra_demands']) {?>
<?php $_smarty_tpl->tpl_vars['roomCount'] = new Smarty_variable(1, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['roomDemand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['roomDemand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rm_v']->value['extra_demands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['roomDemand']->key => $_smarty_tpl->tpl_vars['roomDemand']->value) {
$_smarty_tpl->tpl_vars['roomDemand']->_loop = true;
?>
<?php  $_smarty_tpl->tpl_vars['demand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['demand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roomDemand']->value['extra_demands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['demand']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['demand']->key => $_smarty_tpl->tpl_vars['demand']->value) {
$_smarty_tpl->tpl_vars['demand']->_loop = true;
 $_smarty_tpl->tpl_vars['demand']->index++;
 $_smarty_tpl->tpl_vars['demand']->first = $_smarty_tpl->tpl_vars['demand']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['demandRow']['first'] = $_smarty_tpl->tpl_vars['demand']->first;
?>

<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['demandRow']['first']) {?>
<?php echo $_smarty_tpl->tpl_vars['data_v']->value['name'];?>

<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_form'],"%d-%m-%Y");?>
 <?php echo smartyTranslate(array('s'=>'to'),$_smarty_tpl);?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_to'],"%d-%m-%Y");?>

<?php echo smartyTranslate(array('s'=>'Room'),$_smarty_tpl);?>
 - <?php echo $_smarty_tpl->tpl_vars['roomCount']->value;?>

<?php }?>

<?php echo $_smarty_tpl->tpl_vars['demand']->value['name'];?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['demand']->value['total_price_tax_excl']),$_smarty_tpl);?>


<?php } ?>
<?php $_smarty_tpl->tpl_vars['roomCount'] = new Smarty_variable($_smarty_tpl->tpl_vars['roomCount']->value+1, null, 0);?>
<?php } ?>
<?php }?>
<?php } ?>
<?php } ?>
<?php }?>
<?php }} ?>
