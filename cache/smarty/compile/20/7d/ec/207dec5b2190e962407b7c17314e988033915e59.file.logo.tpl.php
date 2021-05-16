<?php /* Smarty version Smarty-3.1.19, created on 2019-05-03 21:37:39
         compiled from "/var/www/protectorasantapola/themes/pos_petsyshop/modules/poslogo/logo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1939558185ccc98838053d6-40933841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '207dec5b2190e962407b7c17314e988033915e59' => 
    array (
      0 => '/var/www/protectorasantapola/themes/pos_petsyshop/modules/poslogo/logo.tpl',
      1 => 1550094854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1939558185ccc98838053d6-40933841',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'logos' => 0,
    'logo' => 0,
    'base_dir_ssl' => 0,
    'slideOptions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ccc988384f557_98536536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ccc988384f557_98536536')) {function content_5ccc988384f557_98536536($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>
<div class="pos-logo-container">    
        <div class="container">
		
			<div id="colaboradores">
				<span>Nuestros colaboradores</span>
			</div>
            <div class="pos-logo">
                <!--div class="pos-logo-title"><h2><?php echo smartyTranslate(array('s'=>'Our Brands','mod'=>'poslogo'),$_smarty_tpl);?>
</h2></div> -->
                    <ul class="bxslider">
                        <?php  $_smarty_tpl->tpl_vars['logo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['logo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['logo']->key => $_smarty_tpl->tpl_vars['logo']->value) {
$_smarty_tpl->tpl_vars['logo']->_loop = true;
?>
                            <li>
                                <a href ="<?php echo $_smarty_tpl->tpl_vars['logo']->value['link'];?>
">
                                    <img src ="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
img/blocklogo/<?php echo $_smarty_tpl->tpl_vars['logo']->value['id_pos_logo'];?>
.jpg" alt ="<?php echo smartyTranslate(array('s'=>"Logo"),$_smarty_tpl);?>
" />
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
            </div>
        </div>
    </div>
<?php }?>    
    <script type="text/javascript">
          $('.pos-logo .bxslider').bxSlider({
            auto: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['auto']!=1) {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['auto'];?>
<?php } else { ?>1<?php }?>,
            slideWidth:<?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['width_item']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['width_item'];?>
<?php } else { ?>250<?php }?>,
            slideMargin: 0,
            infiniteLoop:false,
            minSlides: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['min_item']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['min_item'];?>
<?php } else { ?>3<?php }?>,
            maxSlides: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['max_item']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['max_item'];?>
<?php } else { ?>8<?php }?>,
            speed:  <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['speed_slide']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['speed_slide'];?>
<?php } else { ?>5000<?php }?>,
            pause: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['a_speed']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['a_speed'];?>
<?php } else { ?>1000<?php }?>,
            controls: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_nexback']!=0) {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['show_nexback'];?>
<?php } else { ?>false<?php }?>,
            pager: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_control']!=0) {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['show_control'];?>
<?php } else { ?>false<?php }?>,
        });
    </script>
         <!--  -->
<?php }} ?>
