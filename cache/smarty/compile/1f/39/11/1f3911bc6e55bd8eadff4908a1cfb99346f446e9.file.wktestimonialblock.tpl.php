<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 11:32:25
         compiled from "/opt/lampp/htdocs/hotelcommerce/modules/wktestimonialblock/views/templates/hook/wktestimonialblock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1901221967612096f1d28fe0-19699071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f3911bc6e55bd8eadff4908a1cfb99346f446e9' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/modules/wktestimonialblock/views/templates/hook/wktestimonialblock.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1901221967612096f1d28fe0-19699071',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'testimonials_data' => 0,
    'HOTEL_TESIMONIAL_BLOCK_HEADING' => 0,
    'HOTEL_TESIMONIAL_BLOCK_CONTENT' => 0,
    'module_dir' => 0,
    'tesimonial' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612096f1d41507_21803815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612096f1d41507_21803815')) {function content_612096f1d41507_21803815($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['testimonials_data']->value)&&$_smarty_tpl->tpl_vars['testimonials_data']->value) {?>
    <div id="hotelTestimonialBlock" class="row home_block_container">
        <div class="col-xs-12 col-sm-12">
            <?php if ($_smarty_tpl->tpl_vars['HOTEL_TESIMONIAL_BLOCK_HEADING']->value&&$_smarty_tpl->tpl_vars['HOTEL_TESIMONIAL_BLOCK_CONTENT']->value) {?>
                <div class="row home_block_desc_wrapper">
                    <div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                        <p class="home_block_heading"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['HOTEL_TESIMONIAL_BLOCK_HEADING']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                        <p class="home_block_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['HOTEL_TESIMONIAL_BLOCK_CONTENT']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                        <hr class="home_block_desc_line"/>
                    </div>
                </div>
            <?php }?>
            <div class="row home_block_content htlTestemonial-owlCarousel">
                <div class="col-sm-12 col-xs-12">
                    <div class="owl-carousel">
                        <?php  $_smarty_tpl->tpl_vars['tesimonial'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tesimonial']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['testimonials_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tesimonial']->key => $_smarty_tpl->tpl_vars['tesimonial']->value) {
$_smarty_tpl->tpl_vars['tesimonial']->_loop = true;
?>
                            <div class="row">
                                <div class='col-xs-4 col-sm-offset-1 col-sm-2'>
                                    <img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
views/img/icon-double-codes.png" class="img-responsive">
                                </div>
                                <div class='col-xs-12 col-sm-7'>
                                    <div class="row">
                                        <div class="col-sm-12 testimonialContentContainer">
                                            <p class="testimonialContentText"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tesimonial']->value['testimonial_content'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 testimonialPersonDetail">
                                            <img width="60px" src="<?php echo $_smarty_tpl->tpl_vars['tesimonial']->value['img_url'];?>
" class="testimonialPersonImg">
                                            <p class="testimonialPersonName"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tesimonial']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                            <p class="testimonialPersonDesig"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tesimonial']->value['designation'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>
<?php }} ?>
