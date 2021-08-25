<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 11:32:26
         compiled from "/opt/lampp/htdocs/hotelcommerce/modules/hotelreservationsystem/views/templates/hook/headerHotelDescBlock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1710971750612096f28119a8-58830535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '796a6ff1ee913c4f43ba92816121071d8caaaaba' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/modules/hotelreservationsystem/views/templates/hook/headerHotelDescBlock.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1710971750612096f28119a8-58830535',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WK_HTL_CHAIN_NAME' => 0,
    'WK_HTL_TAG_LINE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612096f281a394_55875149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612096f281a394_55875149')) {function content_612096f281a394_55875149($_smarty_tpl) {?>

<div class="header-desc-container">
	<div class="header-desc-wrapper">
		<div class="header-desc-primary">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
						<p class="header-desc-welcome"><?php echo smartyTranslate(array('s'=>'Welcome To','mod'=>'hotelreservationsystem'),$_smarty_tpl);?>
</p>
						<hr class="heasder-desc-hr-first"/>
						<div class="header-desc-inner-wrapper">
							<h1 class="header-hotel-name"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['WK_HTL_CHAIN_NAME']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</h1>
							<p class="header-hotel-desc"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['WK_HTL_TAG_LINE']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
							<hr class="heasder-desc-hr-second"/>
						</div>
					</div>
				</div>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayAfterHeaderHotelDesc"),$_smarty_tpl);?>

			</div>
		</div>
	</div>
</div><?php }} ?>
