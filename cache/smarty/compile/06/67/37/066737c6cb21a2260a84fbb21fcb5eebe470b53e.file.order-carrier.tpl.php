<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 07:44:00
         compiled from "/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/order-carrier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:963237330612092a0499d11-61929233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '066737c6cb21a2260a84fbb21fcb5eebe470b53e' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/order-carrier.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '963237330612092a0499d11-61929233',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'checkedTOS' => 0,
    'link_conditions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612092a049f7a3_48421865',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612092a049f7a3_48421865')) {function content_612092a049f7a3_48421865($_smarty_tpl) {?>

<div class="box" id="tc_cont">
    <p class="checkbox">
        <input type="checkbox" name="cgv" id="cgv" value="1" <?php if ($_smarty_tpl->tpl_vars['checkedTOS']->value) {?>checked="checked"<?php }?> />
        <label for="cgv" id="tc_txt"><?php echo smartyTranslate(array('s'=>'I agree to the terms of service and will adhere to them unconditionally.'),$_smarty_tpl);?>
</label>
        <a id="tc_link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_conditions']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="iframe" rel="nofollow" ><?php echo smartyTranslate(array('s'=>'(Read the Terms of Service)'),$_smarty_tpl);?>
</a>
    </p>
</div><?php }} ?>
