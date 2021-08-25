<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 11:49:07
         compiled from "/opt/lampp/htdocs/hotelcommerce/admin292xpetpe/themes/default/template/helpers/kpi/row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70208849861209adb8d4a82-15356583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8df60618977d6d022ce890f065b241287e65ddb1' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/admin292xpetpe/themes/default/template/helpers/kpi/row.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70208849861209adb8d4a82-15356583',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kpis' => 0,
    'col' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_61209adb8e67c5_84213258',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61209adb8e67c5_84213258')) {function content_61209adb8e67c5_84213258($_smarty_tpl) {?>
<div class="panel kpi-container">
	<div class="kpi-refresh"><button class="close refresh" type="button" onclick="refresh_kpis(true);"><i class="process-icon-refresh" style="font-size:1em"></i></button></div>
	<div class="row">
		<?php $_smarty_tpl->tpl_vars['col'] = new Smarty_variable((int)(12/count($_smarty_tpl->tpl_vars['kpis']->value)), null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kpis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['kpi']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['kpi']['iteration']++;
?>
			<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['kpi']['iteration']>$_smarty_tpl->tpl_vars['col']->value+1) {?>
				</div>
				<div class="row">
			<?php }?>
			<div class="col-sm-6 col-lg-<?php echo $_smarty_tpl->tpl_vars['col']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</div>
		<?php } ?>
	</div>
</div>
<?php }} ?>
