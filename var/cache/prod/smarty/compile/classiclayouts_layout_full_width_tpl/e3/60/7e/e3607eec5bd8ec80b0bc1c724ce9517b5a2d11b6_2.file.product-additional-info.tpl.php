<?php
/* Smarty version 3.1.39, created on 2021-11-08 17:30:37
  from '/var/www/prestashop/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618950adefa266_55250869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3607eec5bd8ec80b0bc1c724ce9517b5a2d11b6' => 
    array (
      0 => '/var/www/prestashop/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1633363913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618950adefa266_55250869 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
