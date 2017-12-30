<?php
/* Smarty version 3.1.30, created on 2017-12-13 10:05:19
  from "C:\Program Files (x86)\UwAmp\www\Projet_PHP\PartageRecette\application\views\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a30fb5f495b31_38334650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dffefad6681daf71a5d9f06a6c82592712bea635' => 
    array (
      0 => 'C:\\Program Files (x86)\\UwAmp\\www\\Projet_PHP\\PartageRecette\\application\\views\\layout.tpl',
      1 => 1513159349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./layout/layout_entete.inc.tpl' => 1,
  ),
),false)) {
function content_5a30fb5f495b31_38334650 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<header>
		<?php $_smarty_tpl->_subTemplateRender("file:./layout/layout_entete.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</header>

<html>
	
	<body>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_289835a30fb5f478193_57683775', 'accueil');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98925a30fb5f47de67_49802337', 'connexion');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71815a30fb5f482ed5_59396376', 'profil');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60825a30fb5f4887e3_50544653', 'recette');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_270915a30fb5f48e6f7_08201796', 'recette_detail');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23205a30fb5f493411_40798641', 'recette_liste');
?>

	</body>

</html><?php }
/* {block 'accueil'} */
class Block_289835a30fb5f478193_57683775 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'accueil'} */
/* {block 'connexion'} */
class Block_98925a30fb5f47de67_49802337 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'connexion'} */
/* {block 'profil'} */
class Block_71815a30fb5f482ed5_59396376 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'profil'} */
/* {block 'recette'} */
class Block_60825a30fb5f4887e3_50544653 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'recette'} */
/* {block 'recette_detail'} */
class Block_270915a30fb5f48e6f7_08201796 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'recette_detail'} */
/* {block 'recette_liste'} */
class Block_23205a30fb5f493411_40798641 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'recette_liste'} */
}
