<?php /* Smarty version Smarty-3.1.19, created on 2017-05-12 11:55:51
         compiled from "C:\xampp\htdocs\dittomans\prestashop\themes\default-bootstrap\modules\blockwishlist\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27329591586a70d1f77-31115425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16fe057ae7f3c43d30046d8d0dafa4da2c1817db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dittomans\\prestashop\\themes\\default-bootstrap\\modules\\blockwishlist\\my-account.tpl',
      1 => 1482139024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27329591586a70d1f77-31115425',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_591586a70fa788_62285796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_591586a70fa788_62285796')) {function content_591586a70fa788_62285796($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="icon-heart"></i>
		<span><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>
