<?php
/* Smarty version 3.1.33, created on 2018-11-13 16:39:02
  from '/home/adeline/Documents/Simplon/ProjetsAdeline/prestashop_1.7.4.4/modules/medgtranslate/views/templates/admin/changelog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5beaf016615f36_18438253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13e1af96a51c24ddad2c485d76c0f7dee07bac8e' => 
    array (
      0 => '/home/adeline/Documents/Simplon/ProjetsAdeline/prestashop_1.7.4.4/modules/medgtranslate/views/templates/admin/changelog.tpl',
      1 => 1542123523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5beaf016615f36_18438253 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="medChangelog">

    <ps-panel header="1.1.0 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>'2018-04-16','full'=>0),$_smarty_tpl ) );?>
">

        <ul>
            <li>Reordering the code to fix a Chrome bug</li>
        </ul>

    </ps-panel>

    <ps-panel header="1.0.0 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>'2018-04-05','full'=>0),$_smarty_tpl ) );?>
">

        <ul>
            <li>Initial commit</li>
        </ul>

    </ps-panel>

</div>
<?php }
}
