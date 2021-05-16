<?php /* Smarty version Smarty-3.1.19, created on 2019-02-15 12:11:37
         compiled from "/var/www/protectorasantapola/themes/pos_petsyshop/modules/blocknewsletter/blocknewsletter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3653641675c669e69ebb919-38910551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0f1387b4454a1b0d3f3defd5e174f71d6fe2056' => 
    array (
      0 => '/var/www/protectorasantapola/themes/pos_petsyshop/modules/blocknewsletter/blocknewsletter.tpl',
      1 => 1550000748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3653641675c669e69ebb919-38910551',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'nw_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c669e69ed9583_22839060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c669e69ed9583_22839060')) {function content_5c669e69ed9583_22839060($_smarty_tpl) {?>

<!-- Block Newsletter module-->

<div id="newsletter_block_left" class="f-col span3">
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"blockFooter3"),$_smarty_tpl);?>

	
	
	
	
</div>
<!-- /Block Newsletter module-->

<script type="text/javascript">
    var placeholder = "<?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletter','js'=>1),$_smarty_tpl);?>
";
        $(document).ready(function() {
            $('#newsletter-input').on({
                focus: function() {
                    if ($(this).val() == placeholder) {
                        $(this).val('');
                    }
                },
                blur: function() {
                    if ($(this).val() == '') {
                        $(this).val(placeholder);
                    }
                }
            });

            <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
                $('#columns').before('<div class="clearfix"></div><p class="<?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>warning<?php } else { ?>success<?php }?>"><?php echo smartyTranslate(array('s'=>"Newsletter:",'js'=>1,'mod'=>"blocknewsletter"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>');
            <?php }?>
        });
</script>
<?php }} ?>
