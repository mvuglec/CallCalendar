<?php /* Smarty version Smarty-3.1.8, created on 2013-05-28 13:48:28
         compiled from "/www/htdocs/mrtc/testIDT/adm/themes/idt-user/template/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170074162651a4998c6a0a28-58628834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1718bbb2f1765aaa88f4da0b736afaa5820471b5' => 
    array (
      0 => '/www/htdocs/mrtc/testIDT/adm/themes/idt-user/template/footer.tpl',
      1 => 1358845574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170074162651a4998c6a0a28-58628834',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_footer' => 0,
    'timer_start' => 0,
    'iso_is_fr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51a4998c6e9f98_51092533',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a4998c6e9f98_51092533')) {function content_51a4998c6e9f98_51092533($_smarty_tpl) {?>

					<div style="clear:both;height:0;line-height:0">&nbsp;</div>
					</div>
					<div style="clear:both;height:0;line-height:0">&nbsp;</div>
				</div>
		<?php if ($_smarty_tpl->tpl_vars['display_footer']->value){?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayBackOfficeFooter"),$_smarty_tpl);?>

				<div id="footer">
					<div class="footerLeft">
						<span><?php echo smartyTranslate(array('s'=>'Load time: '),$_smarty_tpl);?>
<?php echo number_format(microtime(true)-$_smarty_tpl->tpl_vars['timer_start']->value,3,'.','');?>
s</span>
					</div>
					<div class="footerRight">
						<?php if ($_smarty_tpl->tpl_vars['iso_is_fr']->value){?>
							<span>Questions / Renseignements / Formations :</span> <strong>+33 (0)1.40.18.30.04</strong> de 09h &agrave; 18h
						<?php }?>
					</div>
				</div>
			</div>
		</div>
		<div id="ajax_confirmation" style="display:none"></div>
		
		<div id="ajaxBox" style="display:none"></div>
		<?php }?>
		<div id="scrollTop"><a href="#top"></a></div>
	</body>
</html>
<?php }} ?>