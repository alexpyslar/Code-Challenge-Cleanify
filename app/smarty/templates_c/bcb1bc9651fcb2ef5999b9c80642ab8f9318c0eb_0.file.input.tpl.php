<?php /* Smarty version 3.1.24, created on 2015-10-18 01:53:25
         compiled from "app/views/input.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:108805622d1656af8c9_13544105%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcb1bc9651fcb2ef5999b9c80642ab8f9318c0eb' => 
    array (
      0 => 'app/views/input.tpl',
      1 => 1445122403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108805622d1656af8c9_13544105',
  'variables' => 
  array (
    'row' => 0,
    'validation' => 0,
    'validation_return' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5622d165740168_54821671',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5622d165740168_54821671')) {
function content_5622d165740168_54821671 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '108805622d1656af8c9_13544105';
?>
<label for="<?php echo $_smarty_tpl->tpl_vars['row']->value['field_name'];?>
">
    <?php echo $_smarty_tpl->tpl_vars['row']->value['field_label'];
if ($_smarty_tpl->tpl_vars['row']->value['required'] == 1) {?><span> *</span><?php }?>
    <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['row']->value['field_name'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['row']->value['default_value'];?>
"
           width="<?php echo $_smarty_tpl->tpl_vars['row']->value['field_size'];?>
" <?php echo $_smarty_tpl->tpl_vars['row']->value['required'] == 1 ? 'required' : '';?>

            <?php if (isset($_smarty_tpl->tpl_vars['validation']->value[$_smarty_tpl->tpl_vars['row']->value['field_name']])) {?>style="color: red;"<?php }?>
           value="<?php echo $_smarty_tpl->tpl_vars['validation_return']->value[$_smarty_tpl->tpl_vars['row']->value['field_name']];?>
"/>
</label>
<?php }
}
?>