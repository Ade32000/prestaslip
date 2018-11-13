<?php
/* Smarty version 3.1.33, created on 2018-11-13 16:39:02
  from '/home/adeline/Documents/Simplon/ProjetsAdeline/prestashop_1.7.4.4/modules/medgtranslate/views/templates/admin/about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5beaf016607da7_17581780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cd1dccc083edf88cd074b903b0d6643a87f26f9' => 
    array (
      0 => '/home/adeline/Documents/Simplon/ProjetsAdeline/prestashop_1.7.4.4/modules/medgtranslate/views/templates/admin/about.tpl',
      1 => 1542123523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5beaf016607da7_17581780 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ps-alert-success>

    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Thanks for installing this module on your website.','mod'=>'medgtranslate'),$_smarty_tpl ) );?>
</p>
	<p><b><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['description']->value,'htmlall','UTF-8' ));?>
, version <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['version']->value,'htmlall','UTF-8' ));?>
.</b></p>
	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Developped by','mod'=>'medgtranslate'),$_smarty_tpl ) );?>
 <a class="redLink" href="https://www.mediacom87.fr/?utm_source=module&utm_medium=cpc&utm_campaign=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'htmlall','UTF-8' ));?>
" target="_blank"><strong>Mediacom87</strong></a>, <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'which helps you to grow your business.','mod'=>'medgtranslate'),$_smarty_tpl ) );?>
</p>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you need support on this module:','mod'=>'medgtranslate'),$_smarty_tpl ) );?>
 <a href="mailto:support@mediacom87.net?subject=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Need help on this module:','mod'=>'medgtranslate'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'htmlall','UTF-8' ));?>
 V.<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['version']->value,'htmlall','UTF-8' ));?>
 - PS.<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ps_version']->value,'htmlall','UTF-8' ));?>
" class="redLink">support@mediacom87.net</a></p>

</ps-alert-success>
<?php }
}
