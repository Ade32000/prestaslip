<?php
/* Smarty version 3.1.33, created on 2018-11-13 16:39:02
  from '/home/adeline/Documents/Simplon/ProjetsAdeline/prestashop_1.7.4.4/modules/medgtranslate/libraries/prestui/ps-tags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5beaf01661feb7_84229342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '187089f59a2690ecb54e4834bd2b5ac9e2d9f520' => 
    array (
      0 => '/home/adeline/Documents/Simplon/ProjetsAdeline/prestashop_1.7.4.4/modules/medgtranslate/libraries/prestui/ps-tags.tpl',
      1 => 1542123523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./ps-".((string)$_smarty_tpl->tpl_vars[\'tag\']->value).".tpl' => 1,
  ),
),false)) {
function content_5beaf01661feb7_84229342 (Smarty_Internal_Template $_smarty_tpl) {
if (!isset($_smarty_tpl->tpl_vars['tags']->value) || !is_array($_smarty_tpl->tpl_vars['tags']->value)) {?>
	<?php $_smarty_tpl->_assignInScope('tags', array('tabs','panel','form','alert','table'));
}?>

<?php echo '<script'; ?>
 type="text/javascript">
	var color_picker = false;
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_assignInScope('ps_version', sprintf("%.1f",@constant('_PS_VERSION_')));?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?>
	<?php $_smarty_tpl->_subTemplateRender("file:./ps-".((string)$_smarty_tpl->tpl_vars['tag']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php echo '<script'; ?>
 type="riot/tag">
	<raw>
		<span></span>

		this.root.innerHTML = opts.content
	</raw>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	riot.mount('*');
<?php echo '</script'; ?>
>
<?php }
}
