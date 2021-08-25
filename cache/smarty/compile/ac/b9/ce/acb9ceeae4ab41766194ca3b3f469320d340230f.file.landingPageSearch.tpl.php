<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 11:32:26
         compiled from "/opt/lampp/htdocs/hotelcommerce/modules/wkroomsearchblock/views/templates/hook/landingPageSearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:397856862612096f2a3cc30-08299335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acb9ceeae4ab41766194ca3b3f469320d340230f' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/modules/wkroomsearchblock/views/templates/hook/landingPageSearch.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '397856862612096f2a3cc30-08299335',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_index_page' => 0,
    'hotels_info' => 0,
    'location_enabled' => 0,
    'show_hotel_name' => 0,
    'max_order_date' => 0,
    'error' => 0,
    'name_val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612096f2aa3f35_32641885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612096f2aa3f35_32641885')) {function content_612096f2aa3f35_32641885($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['is_index_page']->value)&&$_smarty_tpl->tpl_vars['is_index_page']->value) {?>
    <div class="header-rmsearch-container header-rmsearch-hide-xs hidden-xs">
        <?php if (isset($_smarty_tpl->tpl_vars['hotels_info']->value)&&count($_smarty_tpl->tpl_vars['hotels_info']->value)) {?>
            <div class="header-rmsearch-wrapper" id="xs_room_search_form">
                <div class="header-rmsearch-primary">
                    <div class="fancy_search_header_xs">
                        <p><?php echo smartyTranslate(array('s'=>'Search Rooms','mod'=>'wkroomsearchblock'),$_smarty_tpl);?>
</p>
                        <hr>
                    </div>
                    <div class="container">
                        <div class="row header-rmsearch-inner-wrapper">
                            <form method="POST" id="search_hotel_block_form">
                                <?php if (isset($_smarty_tpl->tpl_vars['location_enabled']->value)&&$_smarty_tpl->tpl_vars['location_enabled']->value) {?>
                                    <div class="form-group
                                    <?php if (count($_smarty_tpl->tpl_vars['hotels_info']->value)<=1&&!$_smarty_tpl->tpl_vars['show_hotel_name']->value) {?>
                                        col-sm-3
                                    <?php } else { ?>
                                        col-sm-6 col-lg-3
                                    <?php }?>">
                                        <input type="text" class="form-control header-rmsearch-input" id="hotel_location" name="hotel_location" autocomplete="off" placeholder="<?php echo smartyTranslate(array('s'=>'Hotel Location','mod'=>'wkroomsearchblock'),$_smarty_tpl);?>
">
                                        <div class="dropdown">
                                            <ul class="location_search_results_ul"></ul>
                                        </div>
                                    </div>
                                <?php }?>
                                <div class="form-group <?php if (count($_smarty_tpl->tpl_vars['hotels_info']->value)<=1&&!$_smarty_tpl->tpl_vars['show_hotel_name']->value) {?> hidden <?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['location_enabled']->value)&&$_smarty_tpl->tpl_vars['location_enabled']->value) {?>
                                    col-sm-6 col-lg-3
                                <?php } else { ?>
                                    col-sm-3
                                <?php }?>">
                                    <input type="hidden" name="is_hotel_rooms_search" value="1">
                                    <?php if (!$_smarty_tpl->tpl_vars['show_hotel_name']->value) {?>
                                        <input type="hidden" id="max_order_date" name="max_order_date" value="<?php if (isset($_smarty_tpl->tpl_vars['hotels_info']->value[0]['max_order_date'])) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hotels_info']->value[0]['max_order_date'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>">
                                        <input type="hidden" id="hotel_cat_id" name="hotel_cat_id" value="<?php echo $_smarty_tpl->tpl_vars['hotels_info']->value[0]['id_category'];?>
">
                                        <input type="hidden" id="id_hotel" name="id_hotel" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hotels_info']->value[0]['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                                        <input type="text" id="htl_name" class="form-control header-rmsearch-input" value="<?php echo $_smarty_tpl->tpl_vars['hotels_info']->value[0]['hotel_name'];?>
" readonly>
                                    <?php } else { ?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['hotels_info']->value)&&count($_smarty_tpl->tpl_vars['hotels_info']->value)) {?>
                                            <input type="hidden" id="max_order_date" name="max_order_date" value="<?php if (isset($_smarty_tpl->tpl_vars['max_order_date']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['max_order_date']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>">
                                            <div class="dropdown">
                                                <input type="hidden" id="hotel_cat_id" name="hotel_cat_id">
                                                <input type="hidden" id="id_hotel" name="id_hotel">
                                                <button class="form-control header-rmsearch-input <?php if (isset($_smarty_tpl->tpl_vars['error']->value)&&$_smarty_tpl->tpl_vars['error']->value==1) {?>error_border<?php }?>" type="button" data-toggle="dropdown" id="id_hotel_button">
                                                    <span id="hotel_cat_name" class="pull-left"><?php echo smartyTranslate(array('s'=>'Select Hotel','mod'=>'wkroomsearchblock'),$_smarty_tpl);?>
</span>
                                                </button>
                                                <ul class="dropdown-menu hotel_dropdown_ul">
                                                    <?php if (isset($_smarty_tpl->tpl_vars['hotels_info']->value)&&$_smarty_tpl->tpl_vars['hotels_info']->value) {?>
                                                        <?php  $_smarty_tpl->tpl_vars['name_val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name_val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hotels_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name_val']->key => $_smarty_tpl->tpl_vars['name_val']->value) {
$_smarty_tpl->tpl_vars['name_val']->_loop = true;
?>
                                                            <li class="search_result_li" data-id-hotel="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name_val']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-hotel-cat-id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name_val']->value['id_category'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-max_order_date="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name_val']->value['max_order_date'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name_val']->value['hotel_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</li>
                                                        <?php } ?>
                                                    <?php }?>
                                                </ul>
                                            </div>
                                        <?php }?>
                                    <?php }?>
                                </div>
                                <div class="form-group
                                <?php if (count($_smarty_tpl->tpl_vars['hotels_info']->value)<=1) {?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['location_enabled']->value)&&$_smarty_tpl->tpl_vars['location_enabled']->value&&$_smarty_tpl->tpl_vars['show_hotel_name']->value) {?>
                                        col-sm-4 col-lg-2
                                    <?php } elseif (isset($_smarty_tpl->tpl_vars['location_enabled']->value)&&!$_smarty_tpl->tpl_vars['location_enabled']->value&&!$_smarty_tpl->tpl_vars['show_hotel_name']->value) {?>
                                        col-sm-4
                                    <?php } else { ?>
                                        col-sm-3
                                    <?php }?>
                                <?php } elseif (isset($_smarty_tpl->tpl_vars['location_enabled']->value)&&$_smarty_tpl->tpl_vars['location_enabled']->value) {?>
                                    col-sm-4 col-lg-2
                                <?php } else { ?>
                                    col-sm-3
                                <?php }?>">
                                    <input type="text" class="form-control header-rmsearch-input input-date" id="check_in_time" name="check_in_time" autocomplete="off" placeholder="<?php echo smartyTranslate(array('s'=>'Check In Date','mod'=>'wkroomsearchblock'),$_smarty_tpl);?>
" readonly>
                                </div>
                                <div class="form-group
                                <?php if (count($_smarty_tpl->tpl_vars['hotels_info']->value)<=1) {?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['location_enabled']->value)&&$_smarty_tpl->tpl_vars['location_enabled']->value&&$_smarty_tpl->tpl_vars['show_hotel_name']->value) {?>
                                        col-sm-4 col-lg-2
                                    <?php } elseif (isset($_smarty_tpl->tpl_vars['location_enabled']->value)&&!$_smarty_tpl->tpl_vars['location_enabled']->value&&!$_smarty_tpl->tpl_vars['show_hotel_name']->value) {?>
                                        col-sm-4
                                    <?php } else { ?>
                                        col-sm-3
                                    <?php }?>
                                <?php } elseif (isset($_smarty_tpl->tpl_vars['location_enabled']->value)&&$_smarty_tpl->tpl_vars['location_enabled']->value) {?>
                                    col-sm-4 col-lg-2
                                <?php } else { ?>
                                    col-sm-3
                                <?php }?>">
                                    <input type="text" class="form-control header-rmsearch-input input-date" id="check_out_time" name="check_out_time" autocomplete="off" placeholder="<?php echo smartyTranslate(array('s'=>'Check Out Date','mod'=>'wkroomsearchblock'),$_smarty_tpl);?>
" readonly>
                                </div>
                                <div class="form-group
                                <?php if (count($_smarty_tpl->tpl_vars['hotels_info']->value)<=1) {?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['location_enabled']->value)&&$_smarty_tpl->tpl_vars['location_enabled']->value&&$_smarty_tpl->tpl_vars['show_hotel_name']->value) {?>
                                        col-sm-4 col-lg-2
                                    <?php } elseif (isset($_smarty_tpl->tpl_vars['location_enabled']->value)&&!$_smarty_tpl->tpl_vars['location_enabled']->value&&!$_smarty_tpl->tpl_vars['show_hotel_name']->value) {?>
                                        col-sm-4
                                    <?php } else { ?>
                                        col-sm-3
                                    <?php }?>
                                <?php } elseif (isset($_smarty_tpl->tpl_vars['location_enabled']->value)&&$_smarty_tpl->tpl_vars['location_enabled']->value) {?>
                                    col-sm-4 col-lg-2
                                <?php } else { ?>
                                    col-sm-3
                                <?php }?>">
                                    <button type="submit" class="btn btn-default button button-medium exclusive" name="search_room_submit" id="search_room_submit">
                                        <span><?php echo smartyTranslate(array('s'=>'Search Now','mod'=>'wkroomsearchblock'),$_smarty_tpl);?>
</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
<?php }?><?php }} ?>
