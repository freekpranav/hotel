<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 11:32:26
         compiled from "/opt/lampp/htdocs/hotelcommerce/modules/blocknavigationmenu/views/templates/hook/wkFooterNavigationBlock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:810846796612096f2202bb4-40367357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '896b761e7bc98a69f3e1568134123a2871ac4843' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/modules/blocknavigationmenu/views/templates/hook/wkFooterNavigationBlock.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '810846796612096f2202bb4-40367357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'navigation_links' => 0,
    'navigationLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612096f220e1f5_50013212',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612096f220e1f5_50013212')) {function content_612096f220e1f5_50013212($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['navigation_links']->value)&&$_smarty_tpl->tpl_vars['navigation_links']->value) {?>
	<div class="col-sm-3">
		<div class="row">
			<section class="col-xs-12 col-sm-12">
				<div class="row margin-lr-0 footer-section-heading">
					<p><?php echo smartyTranslate(array('s'=>'Explore','mod'=>'blocknavigationmenu'),$_smarty_tpl);?>
</p>
					<hr/>
				</div>
				<div class="row margin-lr-0">
					<ul class="footer-navigation-section">
					<?php  $_smarty_tpl->tpl_vars['navigationLink'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['navigationLink']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navigation_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['navigationLink']->key => $_smarty_tpl->tpl_vars['navigationLink']->value) {
$_smarty_tpl->tpl_vars['navigationLink']->_loop = true;
?>
						<li class="item">
							<a title="<?php echo $_smarty_tpl->tpl_vars['navigationLink']->value['name'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['navigationLink']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['navigationLink']->value['name'];?>
</a>
						</li>
					<?php } ?>
					</ul>
				</div>
			</section>
		</div>
	</div>
<?php }?>




<?php }} ?>
