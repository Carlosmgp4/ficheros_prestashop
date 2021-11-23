<?php
/* Smarty version 3.1.39, created on 2021-11-08 17:32:09
  from '/var/www/prestashop/themes/classic/templates/_partials/form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61895109d28d79_59709226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aeac7d978ae363327c4def508d9f5f5e7cc61726' => 
    array (
      0 => '/var/www/prestashop/themes/classic/templates/_partials/form-errors.tpl',
      1 => 1633363913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61895109d28d79_59709226 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76923332861895109d268d1_81795306', 'form_errors');
?>

  </div>
<?php }
}
/* {block 'form_errors'} */
class Block_76923332861895109d268d1_81795306 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_errors' => 
  array (
    0 => 'Block_76923332861895109d268d1_81795306',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
          <li class="alert alert-danger"><?php echo nl2br($_smarty_tpl->tpl_vars['error']->value);?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'form_errors'} */
}
