<?php /* Smarty version Smarty-3.1.8, created on 2013-05-28 13:55:51
         compiled from "/www/htdocs/mrtc/testIDT/themes/ipr/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40899716451a49b474bc447-97083786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24ce6a13d98af90a65861d2c90d87b59f40f04b4' => 
    array (
      0 => '/www/htdocs/mrtc/testIDT/themes/ipr/index.tpl',
      1 => 1367830422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40899716451a49b474bc447-97083786',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_HOME' => 0,
    'img_dir' => 0,
    'latest_publications' => 0,
    'latest_publication' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51a49b47673f37_63589993',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a49b47673f37_63589993')) {function content_51a49b47673f37_63589993($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/www/htdocs/mrtc/testIDT/tools/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include '/www/htdocs/mrtc/testIDT/tools/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_regex_replace')) include '/www/htdocs/mrtc/testIDT/tools/smarty/plugins/modifier.regex_replace.php';
if (!is_callable('smarty_modifier_escape')) include '/www/htdocs/mrtc/testIDT/tools/smarty/plugins/modifier.escape.php';
?>
<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>


<div class="right-column">
	<img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
latest_publications.png" />
	<?php  $_smarty_tpl->tpl_vars['latest_publication'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['latest_publication']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['latest_publications']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['latest_publication']->key => $_smarty_tpl->tpl_vars['latest_publication']->value){
$_smarty_tpl->tpl_vars['latest_publication']->_loop = true;
?>
		<div class="row">
			<div class="date">
				<?php if (preg_match_all('/[^\s]/u',smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['latest_publication']->value['date_publish'],'-00',''),'0000',''), $tmp)==10){?>
					<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['latest_publication']->value['date_publish'],'%Y-%m-%d');?>

				<?php }elseif(preg_match_all('/[^\s]/u',smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['latest_publication']->value['date_publish'],'-00',''),'0000',''), $tmp)==7){?>
					<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['latest_publication']->value['date_publish'],'%b %Y');?>

				<?php }elseif(preg_match_all('/[^\s]/u',smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['latest_publication']->value['date_publish'],'-00',''),'0000',''), $tmp)==4){?>
					<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['latest_publication']->value['date_publish'],'-00','');?>

				<?php }?>		
			</div>	
			<div class="title">
				<a href="publications/<?php echo $_smarty_tpl->tpl_vars['latest_publication']->value['id_publication'];?>
-<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['latest_publication']->value['title'],"/[^A-Za-z0-9]/","_");?>
">
					<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['latest_publication']->value['title'], 'htmlall', 'UTF-8');?>

				</a>	
			</div>	
		</div>
	<?php } ?>
</div><?php }} ?>