<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 07:44:02
         compiled from "/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/modules/blockuserinfo/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:883812795612092a2d4f0d6-99242149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b200dcdc030422079149604c705a953f1f85e42' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/modules/blockuserinfo/nav.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '883812795612092a2d4f0d6-99242149',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ajaxCustomerLogin' => 0,
    'logged' => 0,
    'cookie' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612092a2d7e5a3_87313499',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612092a2d7e5a3_87313499')) {function content_612092a2d7e5a3_87313499($_smarty_tpl) {?><!-- Block user information module NAV  -->
<?php if (!isset($_smarty_tpl->tpl_vars['ajaxCustomerLogin']->value)) {?>
<div class="nav_menu_padding header_user_info pull-right hidden-xs">
<?php }?>
	<ul class="navbar-nav userlogin_block hidden-xs">
	<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
		<li class="dropdown account_info_cont">
			<button class="btn dropdown-toggle" type="button" id="user_info_acc" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				<span class="account_user_name hide_xs"><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
</span>
				
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" aria-labelledby="user_info_acc">
				<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Accounts','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
				<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my orders','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Orders'),$_smarty_tpl);?>
</a></li>
				<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
"  title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Logout'),$_smarty_tpl);?>
</a></li>
			</ul>
		</li>
	<?php } else { ?>
	    <li class="active">
	    	<a class="user_login navigation-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
	    		<span class="hide_xs"><?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span>
	    		
	    	</a>
	    </li>
	<?php }?>
	</ul>
<?php if (!isset($_smarty_tpl->tpl_vars['ajaxCustomerLogin']->value)) {?>
</div>
<?php }?>
<!-- /Block user information module NAV -->
<?php }} ?>
