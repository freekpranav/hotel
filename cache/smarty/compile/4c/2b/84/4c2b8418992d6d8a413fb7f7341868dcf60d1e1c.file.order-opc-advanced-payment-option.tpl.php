<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 07:44:00
         compiled from "/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/order-opc-advanced-payment-option.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1662929616612092a0149f54-04599062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c2b8418992d6d8a413fb7f7341868dcf60d1e1c' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/order-opc-advanced-payment-option.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1662929616612092a0149f54-04599062',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'advance_payment_active' => 0,
    'link' => 0,
    'is_advance_payment' => 0,
    'advPaymentAmount' => 0,
    'dueAmount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612092a015af22_92887957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612092a015af22_92887957')) {function content_612092a015af22_92887957($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['advance_payment_active']->value)) {?>
	<div class="opc_advance_payment_block">
		<p class="block-small-header"><?php echo smartyTranslate(array('s'=>'PAYMENT TYPES'),$_smarty_tpl);?>
</p>
		<div class="row adv_payment_type_form">
			<form method="POST" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc'), ENT_QUOTES, 'UTF-8', true);?>
" id="advanced-payment">
				<div class="col-sm-12 col-xs-12">
					<label>
						<input type="radio" value="1" name="payment_type" class="payment_type" <?php if (!isset($_smarty_tpl->tpl_vars['is_advance_payment']->value)) {?>checked="checked"<?php }?>>
						<span><?php echo smartyTranslate(array('s'=>'Full Payment'),$_smarty_tpl);?>
</span>
					</label>
				</div>
				<div class="col-sm-12 col-xs-12">
					<label>
						<input type="radio" value="2" name="payment_type" class="payment_type" <?php if (isset($_smarty_tpl->tpl_vars['is_advance_payment']->value)) {?>checked="checked"<?php }?>>
						<span><?php echo smartyTranslate(array('s'=>'Partial Payment'),$_smarty_tpl);?>
</span>
					</label>

					<div class="row" id="partial_data">
						<div class="row margin-lr-0">
							<div class="col-xs-12 partial_subcont">
								<span class="partial_txt"><?php echo smartyTranslate(array('s'=>'Advance Payment Amount'),$_smarty_tpl);?>
 - </span>
								<span class="partial_min_cost"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['advPaymentAmount']->value),$_smarty_tpl);?>
</span>
							</div>
						</div>

						<?php if (isset($_smarty_tpl->tpl_vars['is_advance_payment']->value)) {?>
							<div class="row margin-lr-0">
								<div class="col-xs-12 partial_subcont">
									<span class="partial_txt"><?php echo smartyTranslate(array('s'=>'Due Amount'),$_smarty_tpl);?>
 - </span>
									<span class="partial_min_cost"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['dueAmount']->value),$_smarty_tpl);?>
</span>
								</div>
							</div>
						<?php }?>
					</div>
				</div>
				<div class="col-sm-12 col-xs-12 margin-top-10">
					<button class="opc-button-small opc-btn-primary" name="submitAdvPayment" type="submit">
						<span><?php echo smartyTranslate(array('s'=>'OK'),$_smarty_tpl);?>
</span>
					</button>
				</div>
			</form>
		</div>
	</div>
<?php }?><?php }} ?>
