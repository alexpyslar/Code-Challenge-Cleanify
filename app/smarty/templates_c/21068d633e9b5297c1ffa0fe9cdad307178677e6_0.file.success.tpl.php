<?php /* Smarty version 3.1.24, created on 2015-10-18 02:54:41
         compiled from "app/views/success.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:203185622dfc1abfaa9_07075337%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21068d633e9b5297c1ffa0fe9cdad307178677e6' => 
    array (
      0 => 'app/views/success.tpl',
      1 => 1445125823,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203185622dfc1abfaa9_07075337',
  'variables' => 
  array (
    'person_firstname' => 0,
    'person_lastname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5622dfc1ac3928_95849433',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5622dfc1ac3928_95849433')) {
function content_5622dfc1ac3928_95849433 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '203185622dfc1abfaa9_07075337';
?>

<article>
    Dear <?php echo $_smarty_tpl->tpl_vars['person_firstname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['person_lastname']->value;?>
,<br/>
    Thank you, for contacting us!
    <hr/>
    <a href="/">Back to form submission</a>
</article><?php }
}
?>