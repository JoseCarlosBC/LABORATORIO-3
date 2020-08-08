<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-06 01:10:51
  from 'C:\xampp\htdocs\LABO 3\FrameworkMVC\templates\Default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f2b3c7b2cf2a1_10886506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04032afe69bae2a6901ab62b216b0bc5095e0536' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LABO 3\\FrameworkMVC\\templates\\Default.tpl',
      1 => 1596668875,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/header.tpl' => 1,
    'file:Admin.php' => 1,
    'file:Login.tpl' => 2,
    'file:Cabecera/footer.tpl' => 1,
  ),
),false)) {
function content_5f2b3c7b2cf2a1_10886506 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabecera/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
	<?php if ($_smarty_tpl->tpl_vars['tipo']->value == 'Administrador') {?>
     <?php $_smarty_tpl->_subTemplateRender('file:Admin.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <?php } else { ?>
       <?php $_smarty_tpl->_subTemplateRender('file:Login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
       <?php }?>
    <?php } else { ?>
      <?php $_smarty_tpl->_subTemplateRender('file:Login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }?>


<?php $_smarty_tpl->_subTemplateRender("file:Cabecera/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }
}
