<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 07:44:01
         compiled from "/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/modules/loyalty/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:531244797612092a1cc8052-03543133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '294ad4af15874c2539af65012cba1ffc3fe574a5' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/modules/loyalty/views/templates/hook/my-account.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '531244797612092a1cc8052-03543133',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612092a1cce894_52470827',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612092a1cce894_52470827')) {function content_612092a1cce894_52470827($_smarty_tpl) {?>

<!-- MODULE Loyalty -->
<li class="loyalty">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('loyalty','default',array('process'=>'summary'),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-flag"></i><span><?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
</span></a>
</li>
<!-- END : MODULE Loyalty --><?php }} ?>
