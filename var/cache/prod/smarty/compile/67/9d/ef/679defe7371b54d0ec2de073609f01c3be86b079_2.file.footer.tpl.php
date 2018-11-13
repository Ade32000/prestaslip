<?php
/* Smarty version 3.1.33, created on 2018-11-13 16:46:28
  from '/home/adeline/Documents/Simplon/ProjetsAdeline/prestashop_1.7.4.4/modules/medgtranslate/views/templates/hook/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5beaf1d445f668_78092180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '679defe7371b54d0ec2de073609f01c3be86b079' => 
    array (
      0 => '/home/adeline/Documents/Simplon/ProjetsAdeline/prestashop_1.7.4.4/modules/medgtranslate/views/templates/hook/footer.tpl',
      1 => 1542123523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5beaf1d445f668_78092180 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="clearBoth col-xs-12 col-sm-2">
    <div id="google_translate_element"></div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: '<?php if (isset($_smarty_tpl->tpl_vars['lang_iso']->value)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['lang_iso']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');
}?>', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
<?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"><?php echo '</script'; ?>
>
<?php }
}
