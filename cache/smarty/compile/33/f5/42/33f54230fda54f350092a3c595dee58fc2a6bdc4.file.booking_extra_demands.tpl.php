<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 11:41:34
         compiled from "/opt/lampp/htdocs/hotelcommerce/mails/en/booking_extra_demands.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1128573074612099165fb357-01521704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33f54230fda54f350092a3c595dee58fc2a6bdc4' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/mails/en/booking_extra_demands.tpl',
      1 => 1629525474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1128573074612099165fb357-01521704',
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
  'unifunc' => 'content_6120991661edb7_60725124',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6120991661edb7_60725124')) {function content_6120991661edb7_60725124($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/opt/lampp/htdocs/hotelcommerce/tools/smarty/plugins/modifier.date_format.php';
?><?php if (isset($_smarty_tpl->tpl_vars['list']->value)) {?>
	<table class="table table-recap extra-demand-table">
		<thead>
			<tr>
				<th colspan="3"><?php echo smartyTranslate(array('s'=>'Extra Demands Details'),$_smarty_tpl);?>
</th>
			</tr>
			<tr>
				<th><?php echo smartyTranslate(array('s'=>'Room Type'),$_smarty_tpl);?>
</th>
				<th><?php echo smartyTranslate(array('s'=>'Extra demand name'),$_smarty_tpl);?>
</th>
				<th><?php echo smartyTranslate(array('s'=>'Total'),$_smarty_tpl);?>
 <br /> <?php echo smartyTranslate(array('s'=>'(Tax excl.)'),$_smarty_tpl);?>
</th>
			</tr>
		</thead>
		<tbody>
			<?php if (isset($_smarty_tpl->tpl_vars['list']->value)) {?>
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
									<tr>
										<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['demandRow']['first']) {?>
											<td class="text-center" rowspan="<?php echo count($_smarty_tpl->tpl_vars['roomDemand']->value['extra_demands']);?>
">
												<font size="2" face="Open-sans, sans-serif" color="#555454">
													<?php echo $_smarty_tpl->tpl_vars['data_v']->value['name'];?>
<br>
													<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_form'],"%d-%m-%Y");?>
 <?php echo smartyTranslate(array('s'=>'to'),$_smarty_tpl);?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_to'],"%d-%m-%Y");?>
<br>
													<strong><?php echo smartyTranslate(array('s'=>'Room'),$_smarty_tpl);?>
 - <?php echo $_smarty_tpl->tpl_vars['roomCount']->value;?>
</strong>
												</font>
											</td>
										<?php }?>
										<td class="text-center">
											<font size="2" face="Open-sans, sans-serif" color="#555454">
												<?php echo $_smarty_tpl->tpl_vars['demand']->value['name'];?>

											</font>
										</td>
										<td class="text-center">
											<font size="2" face="Open-sans, sans-serif" color="#555454">
												<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['demand']->value['total_price_tax_excl']),$_smarty_tpl);?>

											</font>
										</td>
									</tr>
								<?php } ?>
								<?php $_smarty_tpl->tpl_vars['roomCount'] = new Smarty_variable($_smarty_tpl->tpl_vars['roomCount']->value+1, null, 0);?>
							<?php } ?>
						<?php }?>
					<?php } ?>
				<?php } ?>
			<?php }?>
		</tbody>
	</table>
	<style>
		.extra-demand-table {
		 	width:100%;
			border-collapse:collapse;
			padding:5px;
		}
		.extra-demand-table th {
			border:1px solid #D6D4D4;
			background-color: #fbfbfb;
			color: #333;
			font-family: Arial;
			font-size: 13px;
			padding: 7px 5px;
			text-align:left;
		}
		.extra-demand-table td {
			border:1px solid #D6D4D4;
			padding:5px;
		}
	</style>
<?php }?>
<?php }} ?>
