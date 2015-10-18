<?php /* Smarty version 3.1.24, created on 2015-10-18 01:45:27
         compiled from "app/views/form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:81145622cf879697a0_37451097%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfcfd5a1d8d1a5d31ac2ecb15b87db224105316e' => 
    array (
      0 => 'app/views/form.tpl',
      1 => 1445121778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81145622cf879697a0_37451097',
  'variables' => 
  array (
    'form_rows' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5622cf87a19440_87895270',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5622cf87a19440_87895270')) {
function content_5622cf87a19440_87895270 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '81145622cf879697a0_37451097';
?>
<form action="/" method="post">
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