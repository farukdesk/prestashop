<?php /* Smarty version Smarty-3.1.19, created on 2017-05-12 16:26:37
         compiled from "C:\xampp\htdocs\dittomans\prestashop\admin050gz2dra\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:745659158ddda7acd3-75404097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd87d68b7da6fe4ac4451cef432f99082000439e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dittomans\\prestashop\\admin050gz2dra\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1482139020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '745659158ddda7acd3-75404097',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59158ddda7e2b8_28008411',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59158ddda7e2b8_28008411')) {function content_59158ddda7e2b8_28008411($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
