<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 07:44:02
         compiled from "/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/modules/referralprogram/views/templates/front/rules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171149934612092a288a7d2-66843844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7db729c376eab2180e313cdbbef69207cd4d1b45' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/modules/referralprogram/views/templates/front/rules.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171149934612092a288a7d2-66843844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'xml' => 0,
    'paragraph' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612092a2896526_95479476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612092a2896526_95479476')) {function content_612092a2896526_95479476($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/opt/lampp/htdocs/hotelcommerce/tools/smarty/plugins/modifier.replace.php';
?>

<h3><?php echo smartyTranslate(array('s'=>'Referral program rules','mod'=>'referralprogram'),$_smarty_tpl);?>
</h3>

<?php if (isset($_smarty_tpl->tpl_vars['xml']->value)) {?>
<div id="referralprogram_rules">
	<?php if (isset($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value})) {?><div class="rte"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value},"\'","'"),'\"','"');?>
</div><?php }?>
</div>
<?php }?>
<?php }} ?>
