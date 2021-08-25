<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 07:43:59
         compiled from "/opt/lampp/htdocs/hotelcommerce/admin/themes/default/template/controllers/themes/helpers/view/importtheme_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7088499716120929f390a37-33068039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5b94ecd9eb6a63342af85a49d7038230588cc14' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/admin/themes/default/template/controllers/themes/helpers/view/importtheme_view.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7088499716120929f390a37-33068039',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'add_new_theme_label' => 0,
    'context_mode' => 0,
    'add_new_theme_href' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_6120929f3970b9_94924919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6120929f3970b9_94924919')) {function content_6120929f3970b9_94924919($_smarty_tpl) {?>
<div class="panel">
    <h3>
        <i class="icon-picture"></i> <?php echo $_smarty_tpl->tpl_vars['add_new_theme_label']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['context_mode']->value==Context::MODE_HOST) {?><?php echo smartyTranslate(array('s'=>'(Advanced)'),$_smarty_tpl);?>
<?php }?>
    </h3>
    <p><?php echo smartyTranslate(array('s'=>'Duplicate an existing theme and edit it; or create a new theme from scratch! Recommended for advanced users only.'),$_smarty_tpl);?>
</p>
    <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['add_new_theme_href']->value;?>
"><i class="icon-plus"></i> <?php echo $_smarty_tpl->tpl_vars['add_new_theme_label']->value;?>
</a>
</div>
<?php }} ?>
