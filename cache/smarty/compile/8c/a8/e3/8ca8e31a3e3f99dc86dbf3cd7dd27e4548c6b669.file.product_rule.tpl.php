<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 07:43:59
         compiled from "/opt/lampp/htdocs/hotelcommerce/admin/themes/default/template/controllers/cart_rules/product_rule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15216246796120929fbc79b7-42110449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ca8e31a3e3f99dc86dbf3cd7dd27e4548c6b669' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/admin/themes/default/template/controllers/cart_rules/product_rule.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15216246796120929fbc79b7-42110449',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_rule_group_id' => 0,
    'product_rule_id' => 0,
    'product_rule_type' => 0,
    'product_rule_choose_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6120929fbec133_04163089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6120929fbec133_04163089')) {function content_6120929fbec133_04163089($_smarty_tpl) {?><tr id="product_rule_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_tr">
	<td>
		<input type="hidden" name="product_rule_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['product_rule_id']->value;?>
" />
		<input type="hidden" name="product_rule_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_rule_type']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		
		[<?php if ($_smarty_tpl->tpl_vars['product_rule_type']->value=='products') {?><?php echo smartyTranslate(array('s'=>'Room types:'),$_smarty_tpl);?>
<?php } elseif ($_smarty_tpl->tpl_vars['product_rule_type']->value=='categories') {?><?php echo smartyTranslate(array('s'=>'Categories:'),$_smarty_tpl);?>
<?php } elseif ($_smarty_tpl->tpl_vars['product_rule_type']->value=='manufacturers') {?><?php echo smartyTranslate(array('s'=>'Manufacturers:'),$_smarty_tpl);?>
<?php } elseif ($_smarty_tpl->tpl_vars['product_rule_type']->value=='suppliers') {?><?php echo smartyTranslate(array('s'=>'Suppliers'),$_smarty_tpl);?>
<?php } elseif ($_smarty_tpl->tpl_vars['product_rule_type']->value=='attributes') {?><?php echo smartyTranslate(array('s'=>'Attributes'),$_smarty_tpl);?>
<?php }?>]
	</td>
	<td>
		<input type="text" id="product_rule_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_match" value="" disabled="disabled" />
	</td>
	<td>
		<a class="btn btn-default" id="product_rule_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_choose_link" href="#product_rule_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_choose_content">
			<i class="icon-list-ul"></i>
			<?php echo smartyTranslate(array('s'=>'Choose'),$_smarty_tpl);?>

		</a>
		<div>
			<div id="product_rule_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_choose_content">
				<?php echo $_smarty_tpl->tpl_vars['product_rule_choose_content']->value;?>

			</div>
		</div>
	</td>
	<td class="text-right">
		<a class="btn btn-default" href="javascript:removeProductRule(<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
, <?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
);">
			<i class="icon-remove"></i>
		</a>
	</td>
</tr>

<script type="text/javascript">
	$('#product_rule_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_choose_content').parent().hide();
	$("#product_rule_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_choose_link").fancybox({
		autoDimensions: false,
		autoSize: false,
		width: 600,
		height: 250});
	$(document).ready(function() { updateProductRuleShortDescription($('#product_rule_select_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_add')); });
</script><?php }} ?>
