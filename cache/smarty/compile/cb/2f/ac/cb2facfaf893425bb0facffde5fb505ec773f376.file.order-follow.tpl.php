<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 07:44:03
         compiled from "/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/order-follow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1754836192612092a3a28206-73139694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb2facfaf893425bb0facffde5fb505ec773f376' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/order-follow.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1754836192612092a3a28206-73139694',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'ordersReturns' => 0,
    'return' => 0,
    'force_ssl' => 0,
    'base_dir_ssl' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612092a3a61b99_42263261',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612092a3a61b99_42263261')) {function content_612092a3a61b99_42263261($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
		<?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>

	</a>
	<span class="navigation-pipe">
		<?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>

	</span>
	<span class="navigation_page">
		<?php echo smartyTranslate(array('s'=>'Booking Refund Requests'),$_smarty_tpl);?>

	</span>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div class="panel">
	<h1 class="page-heading bottom-indent">
		<i class="icon-tasks"></i> &nbsp;<?php echo smartyTranslate(array('s'=>'Booking Refund Requests'),$_smarty_tpl);?>

	</h1>
	<?php if ($_smarty_tpl->tpl_vars['ordersReturns']->value&&count($_smarty_tpl->tpl_vars['ordersReturns']->value)) {?>
		<div class="table-responsive wk-datatable-wrapper">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th><?php echo smartyTranslate(array('s'=>'Refund Id'),$_smarty_tpl);?>
</th>
						<th><?php echo smartyTranslate(array('s'=>'Order'),$_smarty_tpl);?>
</th>
						<th><?php echo smartyTranslate(array('s'=>'Refund status'),$_smarty_tpl);?>
</th>
						<th><?php echo smartyTranslate(array('s'=>'Date requested'),$_smarty_tpl);?>
</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php  $_smarty_tpl->tpl_vars['return'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['return']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ordersReturns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['return']->key => $_smarty_tpl->tpl_vars['return']->value) {
$_smarty_tpl->tpl_vars['return']->_loop = true;
?>
						<tr>
							<td>
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-return',true), ENT_QUOTES, 'UTF-8', true);?>
&amp;id_order_return=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return']->value['id_order_return'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'#'),$_smarty_tpl);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return']->value['id_order_return'], ENT_QUOTES, 'UTF-8', true);?>
</a>
							</td>
							<td>
								#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return']->value['reference'], ENT_QUOTES, 'UTF-8', true);?>

							</td>
							<td>
								<span class="badge wk-badge" style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return']->value['state_color'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return']->value['state_name'], ENT_QUOTES, 'UTF-8', true);?>
</span>
							</td>
							<td>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['return']->value['date_add'],'full'=>0),$_smarty_tpl);?>

							</td>
							<td>
								<a class="btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-return',true), ENT_QUOTES, 'UTF-8', true);?>
&amp;id_order_return=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return']->value['id_order_return'], ENT_QUOTES, 'UTF-8', true);?>
"><i class="icon-search-plus"></i> <?php echo smartyTranslate(array('s'=>'View details'),$_smarty_tpl);?>
</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	<?php } else { ?>
		<div class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'You have no booking refund requests.'),$_smarty_tpl);?>
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
</ul><?php }} ?>
