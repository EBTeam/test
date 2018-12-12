<?php
/* Smarty version 3.1.33, created on 2018-12-11 15:05:52
  from '/home/www/clients/client1/web152/web/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0fc4404acc67_54856290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '247d1131e33b48e4b88222d420434043508c10d0' => 
    array (
      0 => '/home/www/clients/client1/web152/web/themes/classic/templates/page.tpl',
      1 => 1541535862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0fc4404acc67_54856290 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16402247915c0fc4404a9559_66407938', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_7197059965c0fc4404a9d99_72241132 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_8264163035c0fc4404a9918_65564837 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7197059965c0fc4404a9d99_72241132', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_13381136915c0fc4404ab474_23841355 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_11431774045c0fc4404ab968_36330510 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_3166346395c0fc4404ab0c3_44646945 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13381136915c0fc4404ab474_23841355', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11431774045c0fc4404ab968_36330510', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_3485753945c0fc4404ac407_03591166 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_16811330785c0fc4404ac0b9_00696270 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3485753945c0fc4404ac407_03591166', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_16402247915c0fc4404a9559_66407938 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16402247915c0fc4404a9559_66407938',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_8264163035c0fc4404a9918_65564837',
  ),
  'page_title' => 
  array (
    0 => 'Block_7197059965c0fc4404a9d99_72241132',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_3166346395c0fc4404ab0c3_44646945',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_13381136915c0fc4404ab474_23841355',
  ),
  'page_content' => 
  array (
    0 => 'Block_11431774045c0fc4404ab968_36330510',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_16811330785c0fc4404ac0b9_00696270',
  ),
  'page_footer' => 
  array (
    0 => 'Block_3485753945c0fc4404ac407_03591166',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8264163035c0fc4404a9918_65564837', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3166346395c0fc4404ab0c3_44646945', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16811330785c0fc4404ac0b9_00696270', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
