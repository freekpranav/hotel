<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 07:44:00
         compiled from "/opt/lampp/htdocs/hotelcommerce/admin/themes/default/template/controllers/products/occupancy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1809647031612092a0383e32-67657761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b38a2efdf19d2776f7790859513c11d6b29833e5' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/admin/themes/default/template/controllers/products/occupancy.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1809647031612092a0383e32-67657761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'roomTypeInfo' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612092a039f433_65880397',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612092a039f433_65880397')) {function content_612092a039f433_65880397($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['product']->value->id)) {?>
    <input type="hidden" name="occupancy_loaded" value="1">
	<div id="product-occupancy" class="panel product-tab">
		<input type="hidden" name="submitted_tabs[]" value="Occupancy" />
		<h3 class="tab"> <i class="icon-users"></i> <?php echo smartyTranslate(array('s'=>'Occupancy'),$_smarty_tpl);?>
</h3>

        <div class="alert alert-info">
            <?php echo smartyTranslate(array('s'=>'Set the occupancy of this room type. Enter how much adults and children this room type can accomodate.'),$_smarty_tpl);?>

			<br /><br />
			<b><?php echo smartyTranslate(array('s'=>'Note'),$_smarty_tpl);?>
 : <?php echo smartyTranslate(array('s'=>'These occupancy settings will not affect "ROOM TYPE ADDITIONAL FACILITIES" any way. It will work separately.'),$_smarty_tpl);?>
</b>
        </div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="base_adults">
                <span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo smartyTranslate(array('s'=>''),$_smarty_tpl);?>
">
                    <?php echo smartyTranslate(array('s'=>'Adults'),$_smarty_tpl);?>

                </span>
			</label>
			<div class="col-sm-3">
				<input id="base_adults" type="text" name="base_adults" class="form-control" <?php if (isset($_smarty_tpl->tpl_vars['roomTypeInfo']->value)) {?>value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['roomTypeInfo']->value['adult'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?>>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="base_children">
                <span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo smartyTranslate(array('s'=>''),$_smarty_tpl);?>
">
                    <?php echo smartyTranslate(array('s'=>'Children'),$_smarty_tpl);?>

                </span>
			</label>
			<div class="col-sm-3">
				<input id="base_children" type="text" name="base_children" class="form-control" <?php if (isset($_smarty_tpl->tpl_vars['roomTypeInfo']->value)) {?>value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['roomTypeInfo']->value['children'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?>>
			</div>
		</div>
        <input id="is_occupancy_submit" type="hidden" name="is_occupancy_submit" class="form-control" value="0">

		<div class="panel-footer">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts'), ENT_QUOTES, 'UTF-8', true);?>
<?php if (isset($_REQUEST['page'])&&$_REQUEST['page']>1) {?>&amp;submitFilterproduct=<?php echo intval($_REQUEST['page']);?>
<?php }?>" class="btn btn-default">
				<i class="process-icon-cancel"></i>
				<?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>

			</a>
			<button type="submit" name="submitAddproduct" class="btn btn-default pull-right checkOccupancySubmit" disabled="disabled">
				<i class="process-icon-loading"></i>
				<?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>

			</button>
			<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right checkOccupancySubmit"  disabled="disabled">
				<i class="process-icon-loading"></i>
					<?php echo smartyTranslate(array('s'=>'Save and stay'),$_smarty_tpl);?>

			</button>
		</div>
	</div>
<?php }?>

<script>
    $(document).ready(function() {
        $(".checkOccupancySubmit").on("click", function() {
            $("#is_occupancy_submit").val(1);
            return true;
        });
    });
</script><?php }} ?>
