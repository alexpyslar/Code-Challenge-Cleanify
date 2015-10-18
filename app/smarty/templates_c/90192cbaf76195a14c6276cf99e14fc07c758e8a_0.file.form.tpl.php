<?php /* Smarty version 3.1.24, created on 2015-10-16 12:00:54
         compiled from "app/blocks/form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:158195620bcc685fda3_56988768%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90192cbaf76195a14c6276cf99e14fc07c758e8a' => 
    array (
      0 => 'app/blocks/form.tpl',
      1 => 1444984074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158195620bcc685fda3_56988768',
  'variables' => 
  array (
    'form_rows' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5620bcc6903ec9_81058894',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5620bcc6903ec9_81058894')) {
function content_5620bcc6903ec9_81058894 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '158195620bcc685fda3_56988768';
?>
<form action="/success" method="post">
    <?php
$_from = $_smarty_tpl->tpl_vars['form_rows']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
        <?php if (file_exists("app/views/".((string)$_smarty_tpl->tpl_vars['row']->value['field_type']).".tpl")) {?>
            <div class="<?php echo $_smarty_tpl->tpl_vars['row']->value['field_type'] != 'submit' ? 'form-row-input' : '';?>
">
                <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['row']->value['field_type']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            </div>
        <?php }?>
    <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
</form><?php }
}
?>