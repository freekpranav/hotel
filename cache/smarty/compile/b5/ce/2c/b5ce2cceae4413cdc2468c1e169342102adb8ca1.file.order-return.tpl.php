<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 07:44:00
         compiled from "/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/order-return.tpl" */ ?>
<?php /*%%SmartyHeaderCode:744436174612092a0540d04-60236377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5ce2cceae4413cdc2468c1e169342102adb8ca1' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/order-return.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '744436174612092a0540d04-60236377',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'isRefundCompleted' => 0,
    'refundReqBookings' => 0,
    'booking' => 0,
    'orderCurrency' => 0,
    'currentStateInfo' => 0,
    'orderInfo' => 0,
    'orderReturnInfo' => 0,
    'force_ssl' => 0,
    'base_dir_ssl' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612092a05a6f91_39584943',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612092a05a6f91_39584943')) {function content_612092a05a6f91_39584943($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/lampp/htdocs/hotelcommerce/tools/smarty/plugins/modifier.date_format.php';
?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
		<?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>

	</a>
	<span class="navigation-pipe">
		<?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>

	</span>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true), ENT_QUOTES, 'UTF-8', true);?>
">
		<?php echo smartyTranslate(array('s'=>'Booking refund requests'),$_smarty_tpl);?>

	</a>
	<span class="navigation-pipe">
		<?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>

	</span>
	<span class="navigation_page">
		<?php echo smartyTranslate(array('s'=>'Booking refund detail'),$_smarty_tpl);?>

	</span>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="panel card">
	<h1 class="page-heading bottom-indent">
		<i class="icon-tasks"></i> &nbsp;<?php echo smartyTranslate(array('s'=>'Booking Refund Requests'),$_smarty_tpl);?>

	</h1>
	<div class="table-responsive wk-datatable-wrapper">
		<table class="table table-bordered">
			<tr>
				<th><?php echo smartyTranslate(array('s'=>'Room type'),$_smarty_tpl);?>
</th>
				<th><?php echo smartyTranslate(array('s'=>'Hotel'),$_smarty_tpl);?>
</th>
				<th><?php echo smartyTranslate(array('s'=>'Duration'),$_smarty_tpl);?>
</th>
				<th><?php echo smartyTranslate(array('s'=>'Num rooms'),$_smarty_tpl);?>
</th>
				<th><?php echo smartyTranslate(array('s'=>'Total rooms price (tax incl.)'),$_smarty_tpl);?>
</th>
				<th><?php echo smartyTranslate(array('s'=>'Additional facilities price (tax incl.)'),$_smarty_tpl);?>
</th>
				<?php if ($_smarty_tpl->tpl_vars['isRefundCompleted']->value) {?>
					<th><?php echo smartyTranslate(array('s'=>'Refund amount'),$_smarty_tpl);?>
</th>
				<?php }?>
			</tr>

			<?php  $_smarty_tpl->tpl_vars['booking'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['booking']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['refundReqBookings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['booking']->key => $_smarty_tpl->tpl_vars['booking']->value) {
$_smarty_tpl->tpl_vars['booking']->_loop = true;
?>
				<tr>
					<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['booking']->value['room_type_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
					<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['booking']->value['hotel_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
					<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['booking']->value['date_from'],"%d-%m-%Y");?>
 <?php echo smartyTranslate(array('s'=>'To'),$_smarty_tpl);?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['booking']->value['date_to'],"%d-%m-%Y");?>
</td>
					<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['booking']->value['num_rooms'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
					<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['booking']->value['total_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['orderCurrency']->value['id']),$_smarty_tpl);?>
</td>
					<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['booking']->value['extra_demands_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['orderCurrency']->value['id']),$_smarty_tpl);?>
</td>
					<?php if ($_smarty_tpl->tpl_vars['isRefundCompleted']->value) {?>
						<td>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['booking']->value['refunded_amount'],'currency'=>$_smarty_tpl->tpl_vars['orderCurrency']->value['id']),$_smarty_tpl);?>

						</td>
					<?php }?>
				</tr>
			<?php } ?>
		</table>
	</div>

	<div class="form-group row">
		<div class="col-md-2 col-sm-3">
			<strong><?php echo smartyTranslate(array('s'=>'Current refund state'),$_smarty_tpl);?>
 </strong>
		</div>
		<div class="col-sm-9 col-md-10">
			<span class="badge wk-badge" style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentStateInfo']->value['color'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentStateInfo']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-2 col-sm-3">
			<strong><?php echo smartyTranslate(array('s'=>'Way of payment'),$_smarty_tpl);?>
 </strong>
		</div>
		<div class="col-sm-9 col-md-10">
			<?php if ($_smarty_tpl->tpl_vars['orderInfo']->value['is_advance_payment']) {?><?php echo smartyTranslate(array('s'=>'Advance Payment'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Full Payment'),$_smarty_tpl);?>
<?php }?>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-2 col-sm-3">
			<strong><?php echo smartyTranslate(array('s'=>'Total Order Amount'),$_smarty_tpl);?>
 </strong>
		</div>
		<div class="col-sm-9 col-md-10">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['orderInfo']->value['total_paid_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['orderInfo']->value['id_currency']),$_smarty_tpl);?>

		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-2 col-sm-3">
			<strong><?php echo smartyTranslate(array('s'=>'Refund initiated on'),$_smarty_tpl);?>
 </strong>
		</div>
		<div class="col-sm-9 col-md-10">
			<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['orderReturnInfo']->value['date_add'],"%d-%m-%Y %I:%M %p");?>

		</div>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['currentStateInfo']->value['refunded']) {?>
		<div class="form-group row">
			<div class="col-md-2 col-sm-3">
				<strong><?php echo smartyTranslate(array('s'=>'Refunded Amount','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</strong>
			</div>
			<div class="col-sm-9 col-md-10">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['orderReturnInfo']->value['refunded_amount'],'currency'=>$_smarty_tpl->tpl_vars['orderInfo']->value['id_currency']),$_smarty_tpl);?>

			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-2 col-sm-3">
				<strong><?php echo smartyTranslate(array('s'=>'Payment Mode','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</strong>
			</div>
			<div class="col-sm-9 col-md-10">
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderReturnInfo']->value['payment_mode'], ENT_QUOTES, 'UTF-8', true);?>

			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-2 col-sm-3">
				<strong><?php echo smartyTranslate(array('s'=>'Transaction Id','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</strong>
			</div>
			<div class="col-sm-9 col-md-10">
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderReturnInfo']->value['id_transaction'], ENT_QUOTES, 'UTF-8', true);?>

			</div>
		</div>
	<?php }?>
</div>

<ul class="footer_links clearfix">
	<li><a class="btn btn-default button button-small" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><span><i class="icon-chevron-left"></i> <?php echo smartyTranslate(array('s'=>'Back to your account'),$_smarty_tpl);?>
</span></a></li>
	<li><a class="btn btn-default button button-small" href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>"><span><i class="icon-chevron-left"></i> <?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</span></a></li>
</ul>
<?php }} ?>
