<?php
/* Smarty version 3.1.33, created on 2018-11-13 16:39:02
  from '/home/adeline/Documents/Simplon/ProjetsAdeline/prestashop_1.7.4.4/modules/medgtranslate/libraries/prestui/ps-alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5beaf016662123_06060351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2eb59d27dd85adf5af2d617f80c552773586a7d5' => 
    array (
      0 => '/home/adeline/Documents/Simplon/ProjetsAdeline/prestashop_1.7.4.4/modules/medgtranslate/libraries/prestui/ps-alert.tpl',
      1 => 1542123523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5beaf016662123_06060351 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="riot/tag">
	<ps-alert>

		<?php if ($_smarty_tpl->tpl_vars['ps_version']->value >= 1.6) {?>

			<div class="alert { opts['alertClass'] }">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<yield/>
			</div>

		<?php } else { ?>

			<div class="{ opts['alertClass'] }">
				<yield/>
				<img class="close" alt="X" src="../img/admin/close.png" onclick={ hide }>
			</div>

			<style scoped>

				div {
					position: relative;
					padding-right: 25px !important;
				}

				img.close {
					margin: 0 !important;
					position: absolute;
					right: 10px;
					top: 15px;
					cursor: pointer;
				}

			</style>

			hide(e) {
				$(e.target).parent().hide()
			}

		<?php }?>

	</ps-alert>
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="riot/tag">
	<ps-alert-success>

		<ps-alert alert-class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 1.5) {?>conf<?php } else { ?>alert alert-success<?php }?>">
			<yield/>
		</ps-alert>

	</ps-alert-success>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="riot/tag">
	<ps-alert-error>

		<ps-alert alert-class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 1.5) {?>error<?php } else { ?>alert alert-danger<?php }?>">
			<yield/>
		</ps-alert>

	</ps-alert-error>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="riot/tag">
	<ps-alert-warn>

		<ps-alert alert-class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 1.5) {?>warn<?php } else { ?>alert alert-warning<?php }?>">
			<yield/>
		</ps-alert>

	</ps-alert-warn>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="riot/tag">
	<ps-alert-hint>

		<ps-alert alert-class="<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 1.5) {?>hint<?php } else { ?>alert alert-info<?php }?>">
			<yield/>
		</ps-alert>

		<?php if ($_smarty_tpl->tpl_vars['ps_version']->value == 1.5) {?>

			<style scoped>
				.hint {
					display: block;
					margin: 0 0 10px 0;
				}
			</style>

		<?php }?>

	</ps-alert-hint>
<?php echo '</script'; ?>
>
<?php }
}
