<?php /* Smarty version Smarty-3.1.13, created on 2014-11-28 10:53:47
         compiled from "C:\xampp\htdocs\CallCalendar\prestashop-skeleton\themes\es\staff.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100435478462b0243b9-33357663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdd38d515f7103d8eff9eb98e6e74a414bba678d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CallCalendar\\prestashop-skeleton\\themes\\es\\staff.tpl',
      1 => 1417109256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100435478462b0243b9-33357663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'projects' => 0,
    'project' => 0,
    'id_project' => 0,
    'people' => 0,
    'person' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5478462b220134_07030130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5478462b220134_07030130')) {function content_5478462b220134_07030130($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\CallCalendar\\prestashop-skeleton\\tools\\smarty\\plugins\\modifier.escape.php';
if (!is_callable('smarty_modifier_replace')) include 'C:\\xampp\\htdocs\\CallCalendar\\prestashop-skeleton\\tools\\smarty\\plugins\\modifier.replace.php';
if (!is_callable('smarty_modifier_regex_replace')) include 'C:\\xampp\\htdocs\\CallCalendar\\prestashop-skeleton\\tools\\smarty\\plugins\\modifier.regex_replace.php';
?><script type="text/javascript">
//<![CDATA[
$(document).ready(function()
{
	$("table").tablesorter(); 
	$('.selectScope').change(function()
	{
		document.location.href = 'staff?scope=' + $(this).val();
	});

});
//]]> 
</script>

<div class="centre-column">
	<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
	<form id="staffFilterForm" action="">
		<?php echo smartyTranslate(array('s'=>'Scope:'),$_smarty_tpl);?>

		<select id="selectScope" class="selectScope" name="selectScope" style="left:50px;position:absolute;width:484px;margin-top:-2px">
			<option value="">--- all ---</option>
	
			<?php if ($_smarty_tpl->tpl_vars['projects']->value){?>
				<option value="" style="font-weight:bold">--- PROJECTS ---</option>
				<?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['project']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value){
$_smarty_tpl->tpl_vars['project']->_loop = true;
?>
					<option value="id_project_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['project']->value['id_project'], 'htmlall', 'UTF-8');?>
"
					<?php if ($_smarty_tpl->tpl_vars['id_project']->value==$_smarty_tpl->tpl_vars['project']->value['id_project']){?>selected="selected"<?php }?>
					><?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['project']->value['name'],70), 'htmlall', 'UTF-8');?>
</option>
				<?php } ?>				
			<?php }?>
		</select>		
	</form>
	<br>
	<?php if (isset($_smarty_tpl->tpl_vars['people']->value)){?>
	<table id="staff-table" class="tablesorter"> 
		<thead> 
			<tr> 
				<th class="staff-list-lastname">First Name</th> 
				<th class="staff-list-firstname">Last Name</th> 
				<th class="staff-list-title">Title</th> 
				<th class="staff-list-phone">Phone</th> 
			</tr> 
		</thead> 
		<tbody> 
			<?php  $_smarty_tpl->tpl_vars['person'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['person']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['people']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['person']->key => $_smarty_tpl->tpl_vars['person']->value){
$_smarty_tpl->tpl_vars['person']->_loop = true;
?>
			<tr>
				<td class="staff-list-firstname">
					<a href="staff/<?php echo $_smarty_tpl->tpl_vars['person']->value['id_customer'];?>
-<?php echo smarty_modifier_regex_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['person']->value['firstname'],"ö","o"),"Ö","O"),"ü","u"),"Ü","U"),"ä","a"),"Ä","A"),"å","a"),"Å","A"),"é","e"),"É","E"),"á","a"),"Á","A"),"/[^A-Za-z0-9]/","_");?>
_<?php echo smarty_modifier_regex_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['person']->value['lastname'],"ö","o"),"Ö","O"),"ü","u"),"Ü","U"),"ä","a"),"Ä","A"),"å","a"),"Å","A"),"é","e"),"É","E"),"á","a"),"Á","A"),"/[^A-Za-z0-9]/","_");?>
">
						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['person']->value['firstname'], 'htmlall', 'UTF-8');?>

					</a>
				</td>
				<td class="staff-list-lastname">
					<a href="staff/<?php echo $_smarty_tpl->tpl_vars['person']->value['id_customer'];?>
-<?php echo smarty_modifier_regex_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['person']->value['firstname'],"ö","o"),"Ö","O"),"ü","u"),"Ü","U"),"ä","a"),"Ä","A"),"å","a"),"Å","A"),"é","e"),"É","E"),"á","a"),"Á","A"),"/[^A-Za-z0-9]/","_");?>
_<?php echo smarty_modifier_regex_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['person']->value['lastname'],"ö","o"),"Ö","O"),"ü","u"),"Ü","U"),"ä","a"),"Ä","A"),"å","a"),"Å","A"),"é","e"),"É","E"),"á","a"),"Á","A"),"/[^A-Za-z0-9]/","_");?>
">
						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['person']->value['lastname'], 'htmlall', 'UTF-8');?>

					</a>
				</td>
				<td class="staff-list-title">
					<a href="staff/<?php echo $_smarty_tpl->tpl_vars['person']->value['id_customer'];?>
-<?php echo smarty_modifier_regex_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['person']->value['firstname'],"ö","o"),"Ö","O"),"ü","u"),"Ü","U"),"ä","a"),"Ä","A"),"å","a"),"Å","A"),"é","e"),"É","E"),"á","a"),"Á","A"),"/[^A-Za-z0-9]/","_");?>
_<?php echo smarty_modifier_regex_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['person']->value['lastname'],"ö","o"),"Ö","O"),"ü","u"),"Ü","U"),"ä","a"),"Ä","A"),"å","a"),"Å","A"),"é","e"),"É","E"),"á","a"),"Á","A"),"/[^A-Za-z0-9]/","_");?>
">
						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['person']->value['title'], 'htmlall', 'UTF-8');?>

					</a>
				</td>
				<td class="staff-list-phone">
					<a href="staff/<?php echo $_smarty_tpl->tpl_vars['person']->value['id_customer'];?>
-<?php echo smarty_modifier_regex_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['person']->value['firstname'],"ö","o"),"Ö","O"),"ü","u"),"Ü","U"),"ä","a"),"Ä","A"),"å","a"),"Å","A"),"é","e"),"É","E"),"á","a"),"Á","A"),"/[^A-Za-z0-9]/","_");?>
_<?php echo smarty_modifier_regex_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['person']->value['lastname'],"ö","o"),"Ö","O"),"ü","u"),"Ü","U"),"ä","a"),"Ä","A"),"å","a"),"Å","A"),"é","e"),"É","E"),"á","a"),"Á","A"),"/[^A-Za-z0-9]/","_");?>
">
						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['person']->value['phone'], 'htmlall', 'UTF-8');?>

					</a>
				</td>
			</tr>
			<?php } ?>
		</tbody> 
	</table> 
	<?php }?>
</div>

<?php }} ?>