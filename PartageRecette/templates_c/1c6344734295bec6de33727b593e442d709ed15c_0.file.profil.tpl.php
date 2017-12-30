<?php
/* Smarty version 3.1.30, created on 2017-11-16 08:51:17
  from "C:\Program Files (x86)\UwAmp\www\Projet_PHP\PartageRecette\application\views\modules\profil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0d5185a7b1c5_82110429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c6344734295bec6de33727b593e442d709ed15c' => 
    array (
      0 => 'C:\\Program Files (x86)\\UwAmp\\www\\Projet_PHP\\PartageRecette\\application\\views\\modules\\profil.tpl',
      1 => 1510822107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a0d5185a7b1c5_82110429 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104225a0d5185a79728_06051808', 'profil');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'profil'} */
class Block_104225a0d5185a79728_06051808 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<p>  Bienvenue <?php echo $_smarty_tpl->tpl_vars['data']->value['user']['nom'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['user']['prenom'];?>
  </p>
<?php
}
}
/* {/block 'profil'} */
}
