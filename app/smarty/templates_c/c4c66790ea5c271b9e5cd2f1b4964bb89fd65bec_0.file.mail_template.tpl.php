<?php /* Smarty version 3.1.24, created on 2015-10-18 02:59:33
         compiled from "app/views/mail_template.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:79995622e0e509c991_57523133%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4c66790ea5c271b9e5cd2f1b4964bb89fd65bec' => 
    array (
      0 => 'app/views/mail_template.tpl',
      1 => 1445126370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79995622e0e509c991_57523133',
  'variables' => 
  array (
    'email_rows' => 0,
    'bttc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5622e0e5275487_55675090',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5622e0e5275487_55675090')) {
function content_5622e0e5275487_55675090 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '79995622e0e509c991_57523133';
?>
<div>
    Dear <?php echo $_smarty_tpl->tpl_vars['email_rows']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['email_rows']->value['last_name'];?>
,<br/>
    you've submitted form with next data:<br/>
    <ul>
        <?php if (($_smarty_tpl->tpl_vars['email_rows']->value['first_name'] != '')) {?>
            <li>First Name - <?php echo $_smarty_tpl->tpl_vars['email_rows']->value['first_name'];?>
</li>
        <?php }?>
        <?php if (($_smarty_tpl->tpl_vars['email_rows']->value['last_name'] != '')) {?>
            <li>Last Name - <?php echo $_smarty_tpl->tpl_vars['email_rows']->value['last_name'];?>
</li>
        <?php }?>
        <?php if (($_smarty_tpl->tpl_vars['email_rows']->value['email'] != '')) {?>
            <li>Email - <?php echo $_smarty_tpl->tpl_vars['email_rows']->value['email'];?>
</li>
        <?php }?>
        <?php if (($_smarty_tpl->tpl_vars['email_rows']->value['city'] != '')) {?>
            <li>City - <?php echo $_smarty_tpl->tpl_vars['email_rows']->value['city'];?>
</li>
        <?php }?>
        <?php if (($_smarty_tpl->tpl_vars['email_rows']->value['state'] != '')) {?>
            <li>State - <?php echo $_smarty_tpl->tpl_vars['email_rows']->value['state'];?>
</li>
        <?php }?>
        <?php if (($_smarty_tpl->tpl_vars['email_rows']->value['zip_postal'] != '')) {?>
            <li>Zip/Postal - <?php echo $_smarty_tpl->tpl_vars['email_rows']->value['zip_postal'];?>
</li>
        <?php }?>
        <?php if (($_smarty_tpl->tpl_vars['email_rows']->value['phone'] != '')) {?>
            <li>Phone - <?php echo $_smarty_tpl->tpl_vars['email_rows']->value['phone'];?>
</li>
        <?php }?>
        <?php if (($_smarty_tpl->tpl_vars['email_rows']->value['fax'] != '')) {?>
            <li>Fax - <?php echo $_smarty_tpl->tpl_vars['email_rows']->value['fax'];?>
</li>
        <?php }?>
        <?php if (($_smarty_tpl->tpl_vars['email_rows']->value['best_time_to_contact'] != '')) {?>
            <?php $_smarty_tpl->tpl_vars['bttc'] = new Smarty_Variable(explode(',','Morning,Afternoon,Evening'), null, 0);?>
            <li>Best time to contact - <?php echo $_smarty_tpl->tpl_vars['bttc']->value[$_smarty_tpl->tpl_vars['email_rows']->value['best_time_to_contact']];?>
</li>
        <?php }?>
    </ul>
</div><?php }
}
?>