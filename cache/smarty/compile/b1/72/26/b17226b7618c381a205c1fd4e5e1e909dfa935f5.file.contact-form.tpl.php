<?php /* Smarty version Smarty-3.1.19, created on 2021-08-21 07:44:00
         compiled from "/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/contact-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:894274755612092a0963ba6-62968143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b17226b7618c381a205c1fd4e5e1e909dfa935f5' => 
    array (
      0 => '/opt/lampp/htdocs/hotelcommerce/themes/hotel-reservation-theme/contact-form.tpl',
      1 => 1617152312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '894274755612092a0963ba6-62968143',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirmation' => 0,
    'force_ssl' => 0,
    'base_dir_ssl' => 0,
    'base_dir' => 0,
    'alreadySent' => 0,
    'gblHtlAddress' => 0,
    'gblHtlPhone' => 0,
    'gblHtlEmail' => 0,
    'request_uri' => 0,
    'customerThread' => 0,
    'contacts' => 0,
    'contact' => 0,
    'flag' => 0,
    'all_hotels_info' => 0,
    'email' => 0,
    'message' => 0,
    'fileupload' => 0,
    'max_upload_size' => 0,
    'contactKey' => 0,
    'hotelsInfo' => 0,
    'hotel' => 0,
    'hotelLocationArray' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_612092a09ec401_88772099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_612092a09ec401_88772099')) {function content_612092a09ec401_88772099($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)) {?>
	<p class="alert alert-success"><?php echo smartyTranslate(array('s'=>'Your message has been successfully sent to our team.'),$_smarty_tpl);?>
</p>
	<ul class="footer_links clearfix">
		<li>
			<a class="btn btn-default button button-small" href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>">
				<span>
					<i class="icon-chevron-left"></i><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>

				</span>
			</a>
		</li>
	</ul>
<?php } elseif (isset($_smarty_tpl->tpl_vars['alreadySent']->value)) {?>
	<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'Your message has already been sent.'),$_smarty_tpl);?>
</p>
	<ul class="footer_links clearfix">
		<li>
			<a class="btn btn-default button button-small" href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>">
				<span>
					<i class="icon-chevron-left"></i><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>

				</span>
			</a>
		</li>
	</ul>
<?php } else { ?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="margin-top-50 htl-contact-page">
		<div class="row">
			<p class="contact-header col-sm-offset-2 col-sm-8"><?php echo smartyTranslate(array('s'=>'Contact Us'),$_smarty_tpl);?>
</p>
			<p class="contact-desc col-sm-offset-2 col-sm-8"><?php echo smartyTranslate(array('s'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text.'),$_smarty_tpl);?>
</p>
		</div>
		<div class="row margin-top-50">
			<?php if ((isset($_smarty_tpl->tpl_vars['gblHtlAddress']->value)&&$_smarty_tpl->tpl_vars['gblHtlAddress']->value)&&(isset($_smarty_tpl->tpl_vars['gblHtlPhone']->value)&&$_smarty_tpl->tpl_vars['gblHtlPhone']->value)&&(isset($_smarty_tpl->tpl_vars['gblHtlEmail']->value)&&$_smarty_tpl->tpl_vars['gblHtlEmail']->value)) {?>
				<div class="col-sm-6">
					<div class="htl-global-address-div col-md-8 col-sm-12">
						<?php if (isset($_smarty_tpl->tpl_vars['gblHtlPhone']->value)&&$_smarty_tpl->tpl_vars['gblHtlPhone']->value) {?>
							<div>
								<p class="global-address-header"><?php echo smartyTranslate(array('s'=>'Main Branch'),$_smarty_tpl);?>
</p>
								<p class="global-address-value">
									<?php echo $_smarty_tpl->tpl_vars['gblHtlAddress']->value;?>

								</p>
							</div>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['gblHtlPhone']->value)&&$_smarty_tpl->tpl_vars['gblHtlPhone']->value) {?>
							<div>
								<p class="global-address-header"><?php echo smartyTranslate(array('s'=>'Phone'),$_smarty_tpl);?>
</p>
								<p class="global-address-value">
									<?php echo $_smarty_tpl->tpl_vars['gblHtlPhone']->value;?>

								</p>
							</div>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['gblHtlEmail']->value)&&$_smarty_tpl->tpl_vars['gblHtlEmail']->value) {?>
							<div>
								<p class="global-address-header"><?php echo smartyTranslate(array('s'=>'Mail Us'),$_smarty_tpl);?>
</p>
								<p class="global-address-value">
									<?php echo $_smarty_tpl->tpl_vars['gblHtlEmail']->value;?>

								</p>
							</div>
						<?php }?>
					</div>
				</div>
			<?php }?>
			<div class="col-sm-6 <?php if (!(isset($_smarty_tpl->tpl_vars['gblHtlAddress']->value)&&$_smarty_tpl->tpl_vars['gblHtlAddress']->value)&&!(isset($_smarty_tpl->tpl_vars['gblHtlPhone']->value)&&$_smarty_tpl->tpl_vars['gblHtlPhone']->value)&&!(isset($_smarty_tpl->tpl_vars['gblHtlEmail']->value)&&$_smarty_tpl->tpl_vars['gblHtlEmail']->value)) {?> col-sm-offset-3 <?php }?>">
				<form action="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
" method="post" class="contact-form-box" enctype="multipart/form-data">
					<?php if (isset($_smarty_tpl->tpl_vars['customerThread']->value['id_contact'])&&$_smarty_tpl->tpl_vars['customerThread']->value['id_contact']&&count($_smarty_tpl->tpl_vars['contacts']->value)) {?>
						<?php $_smarty_tpl->tpl_vars['flag'] = new Smarty_variable(true, null, 0);?>
						<?php  $_smarty_tpl->tpl_vars['contact'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['contact']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contacts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->key => $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['contact']->value['id_contact']==$_smarty_tpl->tpl_vars['customerThread']->value['id_contact']) {?>
								<input type="text" class="form-control" id="contact_name" name="contact_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" readonly="readonly" />
								<input type="hidden" name="id_contact" value="<?php echo intval($_smarty_tpl->tpl_vars['contact']->value['id_contact']);?>
" />
								<?php $_smarty_tpl->tpl_vars['flag'] = new Smarty_variable(false, null, 0);?>
							<?php }?>
						<?php } ?>
						<?php if ($_smarty_tpl->tpl_vars['flag']->value&&isset($_smarty_tpl->tpl_vars['contacts']->value[0]['id_contact'])) {?>
							<input type="text" class="form-control" id="contact_name" name="contact_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contacts']->value[0]['name'], ENT_QUOTES, 'UTF-8', true);?>
" readonly="readonly" />
							<input type="hidden" name="id_contact" value="<?php echo intval($_smarty_tpl->tpl_vars['contacts']->value[0]['id_contact']);?>
" />
						<?php }?>
					<?php } else { ?>
						<div class="form-group row">
							<div class="col-sm-12">
								<label for="message" class="control-label">
									<?php echo smartyTranslate(array('s'=>'Subject'),$_smarty_tpl);?>

								</label>
								<div class="dropdown">
		                            <button class="form-control contact_type_input" type="button" data-toggle="dropdown">
										<span id="contact_type" class="pull-left"><?php echo smartyTranslate(array('s'=>'Choose'),$_smarty_tpl);?>
</span>
										<input type="hidden" id="id_contact" name="id_contact" value="0">
										<span class="arrow_span">
		                                    <i class="icon icon-angle-down"></i>
		                                </span>
		                            </button>
		                            <ul class="dropdown-menu contact_type_ul">
										<?php  $_smarty_tpl->tpl_vars['contact'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['contact']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contacts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->key => $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->_loop = true;
?>
											<li  value="<?php echo intval($_smarty_tpl->tpl_vars['contact']->value['id_contact']);?>
"<?php if (isset($_REQUEST['id_contact'])&&$_REQUEST['id_contact']==$_smarty_tpl->tpl_vars['contact']->value['id_contact']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

											</li>
										<?php } ?>

		                                <?php if (isset($_smarty_tpl->tpl_vars['all_hotels_info']->value)&&$_smarty_tpl->tpl_vars['all_hotels_info']->value) {?>
											<?php  $_smarty_tpl->tpl_vars['htl_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['htl_v']->_loop = false;
 $_smarty_tpl->tpl_vars['htl_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['all_hotels_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['htl_v']->key => $_smarty_tpl->tpl_vars['htl_v']->value) {
$_smarty_tpl->tpl_vars['htl_v']->_loop = true;
 $_smarty_tpl->tpl_vars['htl_k']->value = $_smarty_tpl->tpl_vars['htl_v']->key;
?>
											<?php } ?>
										<?php }?>
		                            </ul>
		                        </div>
							</div>
						</div>
					<?php }?>
					<div class="form-group row">
						<div class="col-sm-12">
							<label for="price" class="control-label">
								<?php echo smartyTranslate(array('s'=>'Email'),$_smarty_tpl);?>

							</label>
							<?php if (isset($_smarty_tpl->tpl_vars['customerThread']->value['email'])) {?>
								<input class="form-control contact_input" type="email" id="email" name="from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerThread']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
" readonly="readonly" />
							<?php } else { ?>
								<input class="form-control contact_input validate" type="email" id="email" name="from" data-validate="isEmail" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
							<?php }?>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-12">
							<label for="message" class="control-label">
								<?php echo smartyTranslate(array('s'=>'Message/Query'),$_smarty_tpl);?>

							</label>
							<textarea class="form-control contact_textarea" id="message" name="message"><?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?><?php echo stripslashes(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value, ENT_QUOTES, 'UTF-8', true));?>
<?php }?></textarea>
						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['fileupload']->value==1) {?>
						<div class="form-group row">
							<div class="col-sm-12">
								<label for="fileUpload" class="control-label">
									<?php echo smartyTranslate(array('s'=>'Attach File'),$_smarty_tpl);?>

								</label>
								<input type="hidden" name="MAX_FILE_SIZE" value="<?php if (isset($_smarty_tpl->tpl_vars['max_upload_size']->value)&&$_smarty_tpl->tpl_vars['max_upload_size']->value) {?><?php echo intval($_smarty_tpl->tpl_vars['max_upload_size']->value);?>
<?php } else { ?>2000000<?php }?>" />
								<input type="file" name="fileUpload" id="fileUpload" class="form-control" />
							</div>
						</div>
					<?php }?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayGDPRConsent','moduleName'=>'contactform'),$_smarty_tpl);?>

					<div class="form-group">
						<input type="text" name="url" value="" class="hidden" />
						<input type="hidden" name="contactKey" value="<?php echo $_smarty_tpl->tpl_vars['contactKey']->value;?>
" />
						<button class="btn button button-medium contact_btn" type="submit" name="submitMessage" id="submitMessage" ><span><?php echo smartyTranslate(array('s'=>'Send Message'),$_smarty_tpl);?>
</span></button>
					</div>
				</form>
			</div>
		</div>
		<?php if (isset($_smarty_tpl->tpl_vars['hotelsInfo']->value)&&$_smarty_tpl->tpl_vars['hotelsInfo']->value) {?>
			<div class="row hotels-container">
				<div class="col-sm-12 hotel-header">
					<span><?php echo smartyTranslate(array('s'=>'Our Hotels'),$_smarty_tpl);?>
</span>
				</div>
				<?php  $_smarty_tpl->tpl_vars['hotel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hotel']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hotelsInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hotel']->key => $_smarty_tpl->tpl_vars['hotel']->value) {
$_smarty_tpl->tpl_vars['hotel']->_loop = true;
?>
					<div class="col-sm-6 margin-bottom-50">
						<div class="hotel-city-container">
							<span class="htl-map-icon"></span><span><?php echo $_smarty_tpl->tpl_vars['hotel']->value['city'];?>
</span>
						</div>
						<div class="hotel-address-container">
							<div class="col-xs-4">
								<img class="htl-img" style="width:100%" src="<?php echo $_smarty_tpl->tpl_vars['hotel']->value['image_url'];?>
">
							</div>
							<div class="col-xs-8">
								<p class="hotel-name"><span><?php echo $_smarty_tpl->tpl_vars['hotel']->value['hotel_name'];?>
</span></p>
								<p class="hotel-branch-info-value"><?php echo $_smarty_tpl->tpl_vars['hotel']->value['address'];?>
, <?php echo $_smarty_tpl->tpl_vars['hotel']->value['city'];?>
, <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['hotel']->value['state_name'];?>
<?php $_tmp23=ob_get_clean();?><?php if ($_tmp23) {?><?php echo $_smarty_tpl->tpl_vars['hotel']->value['state_name'];?>
,<?php }?> <?php echo $_smarty_tpl->tpl_vars['hotel']->value['country_name'];?>
, <?php echo $_smarty_tpl->tpl_vars['hotel']->value['zipcode'];?>
</p>
								<?php if ($_smarty_tpl->tpl_vars['hotel']->value['latitude']!=0||$_smarty_tpl->tpl_vars['hotel']->value['longitude']!=0) {?>
									<p class="hotel-branch-info-value">
										<a class="btn htl-map-direction-btn" href="http://maps.google.com/maps?daddr=(<?php echo $_smarty_tpl->tpl_vars['hotel']->value['latitude'];?>
,<?php echo $_smarty_tpl->tpl_vars['hotel']->value['longitude'];?>
)" target="_blank">
											<span class=""><?php echo smartyTranslate(array('s'=>'View on map'),$_smarty_tpl);?>
</span>
										</a>
									</p>
								<?php }?>
								<p class="hotel-branch-info-value">
									<span class="htl-address-icon htl-phone-icon"></span><?php echo $_smarty_tpl->tpl_vars['hotel']->value['phone'];?>

								</p>
								<p class="hotel-branch-info-value">
									<span class="htl-address-icon htl-email-icon"></span><?php echo $_smarty_tpl->tpl_vars['hotel']->value['email'];?>

								</p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['hotelLocationArray']->value)) {?>
			<div class="row">
				<div class="col-xs-12 col-sm-12" id="googleMapWrapper">
					<div id="map"></div>
				</div>
			</div>
		<?php }?>
		<div style="clear:both;"></div>
	</div>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'contact_fileDefaultHtml')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'contact_fileDefaultHtml'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'No file selected','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'contact_fileDefaultHtml'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'contact_fileButtonHtml')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'contact_fileButtonHtml'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Choose File','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'contact_fileButtonHtml'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if (isset($_smarty_tpl->tpl_vars['hotelLocationArray']->value)) {?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('hotelLocationArray'=>$_smarty_tpl->tpl_vars['hotelLocationArray']->value),$_smarty_tpl);?>

<?php } else { ?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('hotelLocationArray'=>0),$_smarty_tpl);?>

<?php }?><?php }} ?>
