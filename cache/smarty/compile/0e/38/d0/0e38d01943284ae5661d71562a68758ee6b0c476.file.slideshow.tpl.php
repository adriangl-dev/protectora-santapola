<?php /* Smarty version Smarty-3.1.19, created on 2021-01-20 11:54:06
         compiled from "/var/www/protectorasantapola/public_html/themes/pos_petsyshop/modules/posslideshow/slideshow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47626233760080bce37a780-42213673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e38d01943284ae5661d71562a68758ee6b0c476' => 
    array (
      0 => '/var/www/protectorasantapola/public_html/themes/pos_petsyshop/modules/posslideshow/slideshow.tpl',
      1 => 1556915561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47626233760080bce37a780-42213673',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'slides' => 0,
    'base_dir_ssl' => 0,
    'slide' => 0,
    'slideOptions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60080bce3dae78_40214202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60080bce3dae78_40214202')) {function content_60080bce3dae78_40214202($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>
    <div class="pos-slideshow-container">
    <div class="flexslider ma-nivoslider">
        <div class="pos-loading"></div>
            <div id="pos-slideshow-home" class="slides">
                <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['slide']->key;
?>
                    <img style ="display:none" src="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
img/blockslideshow/<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_pos_slideshow'];?>
.jpg"  data-transition="boxRainReverse" data-thumb="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
img/blockslideshow/<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_pos_slideshow'];?>
.jpg"  alt="" title="#htmlcaption<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_pos_slideshow'];?>
"  />
                <?php } ?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_caption']!=0) {?>
                <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['slide']->key;
?>
                    <div id="htmlcaption<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_pos_slideshow'];?>
" class="pos-slideshow-caption nivo-html-caption nivo-caption">
                            <div class="pos-slideshow-title">
                                   <h3><?php echo $_smarty_tpl->tpl_vars['slide']->value['title'];?>
</h3>
                            </div>
                            <div class="pos-slideshow-des">
                                    <strong><?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>
</strong>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['slide']->value['link']) {?>
                            <div class="pos-slideshow-readmore">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['slide']->value['link'];?>
" <?php echo smartyTranslate(array('s'=>('Read more'),'mod'=>'posslideshow'),$_smarty_tpl);?>
><?php echo smartyTranslate(array('s'=>('Read more'),'mod'=>'posslideshow'),$_smarty_tpl);?>
</a> 
                            </div>
                            <?php }?>
                    </div>
                 <?php } ?>
             <?php }?>
        </div>
    </div>

 <script type="text/javascript">
    $(window).load(function() {
        $('#pos-slideshow-home').nivoSlider({
            effect: '<?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['animation_type']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['animation_type'];?>
<?php } else { ?>random<?php }?>',
            slices: 15,
            boxCols: 8,
            boxRows: 4,
            animSpeed: '<?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['animation_speed']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['animation_speed'];?>
<?php } else { ?>600<?php }?>',
            pauseTime: '<?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['pause_time']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['pause_time'];?>
<?php } else { ?>5000<?php }?>',
            startSlide: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['start_slide']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['start_slide'];?>
<?php } else { ?>0<?php }?>,
            directionNav: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_arrow']!=0) {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['show_arrow'];?>
<?php } else { ?>false<?php }?>,
            controlNav: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_navigation']!=0) {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['show_navigation'];?>
<?php } else { ?>false<?php }?>,
            controlNavThumbs: false,
            pauseOnHover: true,
            manualAdvance: false,
            prevText: 'Prev',
            nextText: 'Next',
                        afterLoad: function(){
                         $('.pos-loading').css("display","none");
                        },     
                        beforeChange: function(){ 
                            $('.pos-slideshow-title, .pos-slideshow-des').css("left","-300%" );
                            $('.pos-slideshow-readmore').css("left","-300%"); 
                        }, 
                        afterChange: function(){ 
                            $('.pos-slideshow-title, .pos-slideshow-des, .pos-slideshow-readmore').css("left","0") 
                        }
        });
    });
    </script>
<?php }?>
<?php }} ?>
