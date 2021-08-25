<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 07:44:01
         compiled from "/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/_partials/order_booking_demands.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1496587499612092a14cd2d5-66698699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2599186d9bf0057692248169ca8e21294783cab0' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/_partials/order_booking_demands.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1496587499612092a14cd2d5-66698699',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'extraDemands' => 0,
    'roomCount' => 0,
    'roomDemand' => 0,
    'demand' => 0,
    'useTax' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612092a14e4a13_63011659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612092a14e4a13_63011659')) {function content_612092a14e4a13_63011659($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['extraDemands']->value)&&$_smarty_tpl->tpl_vars['extraDemands']->value) {?>
	<?php $_smarty_tpl->tpl_vars['roomCount'] = new Smarty_variable(1, null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['roomDemand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['roomDemand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['extraDemands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['roomDemand']->key => $_smarty_tpl->tpl_vars['roomDemand']->value) {
$_smarty_tpl->tpl_vars['roomDemand']->_loop = true;
?>
		<div class="card">
			<div class="row">
				<div class="col-sm-12 demand_header">
					<?php echo smartyTranslate(array('s'=>'Room'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roomCount']->value, ENT_QUOTES, 'UTF-8', true);?>

				</div>
				<div>
					<div class="col-sm-12 demand_detail">
						<?php  $_smarty_tpl->tpl_vars['demand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['demand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roomDemand']->value['extra_demands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['demand']->key => $_smarty_tpl->tpl_vars['demand']->value) {
$_smarty_tpl->tpl_vars['demand']->_loop = true;
?>
							<div class="row demand_detail_price_block">
								<div class="col-xs-6"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="col-xs-6">
									<span class="pull-right">
										<?php if ($_smarty_tpl->tpl_vars['useTax']->value) {?>
											<?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['total_price_tax_incl'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp33=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_tmp33),$_smarty_tpl);?>

										<?php } else { ?>
											<?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['total_price_tax_excl'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp34=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_tmp34),$_smarty_tpl);?>

										<?php }?>
									</span>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<?php $_smarty_tpl->tpl_vars['roomCount'] = new Smarty_variable($_smarty_tpl->tpl_vars['roomCount']->value+1, null, 0);?>
	<?php } ?>
<?php }?><?php }} ?>
