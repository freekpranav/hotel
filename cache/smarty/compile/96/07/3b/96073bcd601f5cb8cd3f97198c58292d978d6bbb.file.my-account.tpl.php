<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 07:44:02
         compiled from "/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/modules/favoriteproducts/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:268689273612092a22d8e43-32886149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96073bcd601f5cb8cd3f97198c58292d978d6bbb' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/modules/favoriteproducts/views/templates/hook/my-account.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268689273612092a22d8e43-32886149',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'in_footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612092a22e1f00_54376329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612092a22e1f00_54376329')) {function content_612092a22e1f00_54376329($_smarty_tpl) {?>

<li class="favoriteproducts">
	<a
	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
"
	title="<?php echo smartyTranslate(array('s'=>'My favorite products.','mod'=>'favoriteproducts'),$_smarty_tpl);?>
">
		<?php if (!$_smarty_tpl->tpl_vars['in_footer']->value) {?>
			<i class="icon-heart-empty"></i>
			<span><?php echo smartyTranslate(array('s'=>'My favorite products','mod'=>'favoriteproducts'),$_smarty_tpl);?>
</span>
		<?php } else { ?>
			<?php echo smartyTranslate(array('s'=>'My favorite products','mod'=>'favoriteproducts'),$_smarty_tpl);?>

		<?php }?>
	</a>
</li>
<?php }} ?>
