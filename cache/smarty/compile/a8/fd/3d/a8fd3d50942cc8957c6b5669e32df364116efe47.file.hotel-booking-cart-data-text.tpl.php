<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 11:41:34
         compiled from "/opt/lampp/htdocs/hotelcommerce/mails/en/hotel-booking-cart-data-text.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1341252676612099165b52b4-85316324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8fd3d50942cc8957c6b5669e32df364116efe47' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/mails/en/hotel-booking-cart-data-text.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1341252676612099165b52b4-85316324',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'data_v' => 0,
    'rm_v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612099165de547_27351005',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612099165de547_27351005')) {function content_612099165de547_27351005($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/lampp/htdocs/hotelcommerce/tools/smarty/plugins/modifier.date_format.php';
?><?php if (isset($_smarty_tpl->tpl_vars['list']->value)) {?>
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
<img src="<?php echo $_smarty_tpl->tpl_vars['data_v']->value['cover_img'];?>
" class="img-responsive" />

<?php echo $_smarty_tpl->tpl_vars['data_v']->value['name'];?>


<?php echo $_smarty_tpl->tpl_vars['data_v']->value['hotel_name'];?>


<?php echo $_smarty_tpl->tpl_vars['data_v']->value['adult'];?>
 <?php echo smartyTranslate(array('s'=>'Adults'),$_smarty_tpl);?>
, <?php echo $_smarty_tpl->tpl_vars['data_v']->value['children'];?>
 <?php echo smartyTranslate(array('s'=>'Children'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['data_v']->value['unit_price']),$_smarty_tpl);?>


<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['num_rm'];?>


<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_form'],"%d-%b-%G");?>


<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_to'],"%d-%b-%G");?>


<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['amount'];?>



<?php } ?>
<?php } ?>
<?php }?>

<?php }} ?>
