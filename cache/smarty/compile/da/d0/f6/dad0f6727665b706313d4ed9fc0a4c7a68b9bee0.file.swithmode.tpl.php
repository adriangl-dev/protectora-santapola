<?php /* Smarty version Smarty-3.1.19, created on 2021-01-20 11:54:01
         compiled from "/var/www/protectorasantapola/public_html/themes/pos_petsyshop/modules/posmodeproduct/swithmode.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209480629960080bc9b83dd9-91221576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dad0f6727665b706313d4ed9fc0a4c7a68b9bee0' => 
    array (
      0 => '/var/www/protectorasantapola/public_html/themes/pos_petsyshop/modules/posmodeproduct/swithmode.tpl',
      1 => 1556915561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209480629960080bc9b83dd9-91221576',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_mode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60080bc9ba99e1_89687489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60080bc9ba99e1_89687489')) {function content_60080bc9ba99e1_89687489($_smarty_tpl) {?><script type='text/javascript'>
//<![CDATA[

function setCookie(c_name,value,exdays)
{
    var exdate=new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
    document.cookie=c_name + "=" + c_value;
}

$(document).ready(function() {
         var mode_product = '<?php echo $_smarty_tpl->tpl_vars['product_mode']->value;?>
';
         var modeButton = '<div id="view_as">';
            if(mode_product == 'grid') {
                modeButton += '<div class="switch_mode products_left_grid_button active"><span class="products_grid_button_id"><?php echo smartyTranslate(array('s'=>"Grid view"),$_smarty_tpl);?>
</span></div>'
            } else {
                modeButton += '<div class="switch_mode products_left_grid_button"><span class="products_grid_button_id"><?php echo smartyTranslate(array('s'=>"Grid view"),$_smarty_tpl);?>
</span></div>'
            }
            if(mode_product == 'list') {
                modeButton += '<div class="switch_mode products_right_grid_button active"><span class="products_list_button_id"><?php echo smartyTranslate(array('s'=>"List view"),$_smarty_tpl);?>
</span></div>'
            } else {
                modeButton += '<div class="switch_mode products_right_grid_button"><span class="products_list_button_id"><?php echo smartyTranslate(array('s'=>"List view"),$_smarty_tpl);?>
</span></div>'
            }
            modeButton += '</div>';

         var selectMode = '<select name ="switch_mode_product" class = "switch_mode_product">';
             if(mode_product == 'list') {
                selectMode += '<option value="list" selected ="selected"><?php echo smartyTranslate(array('s'=>"List view"),$_smarty_tpl);?>
</option>';
             } else {
                selectMode += '<option value="list"><?php echo smartyTranslate(array('s'=>"List view"),$_smarty_tpl);?>
</option>';
             }
             if(mode_product == 'grid') {
                selectMode += '<option value="grid" selected = "selected"><?php echo smartyTranslate(array('s'=>"Grid view"),$_smarty_tpl);?>
</option>';
             } else {
                selectMode += '<option value="grid"><?php echo smartyTranslate(array('s'=>"Grid view"),$_smarty_tpl);?>
</option>';
             }
             selectMode +='</select>';

    
         $('.sortPagiBar .mode-view').append(modeButton);
         //$('.content_sortPagiBar').append(selectMode);
         $('.switch_mode_product').bind('change', function() {
            var url = window.location.href;
            if(mode_product!=""){
                var mode = $(this).val();
             
                if(mode=='grid'){
                     setCookie('product_mode', 'grid',99999);  
                        location.reload();
                }
                if(mode=='list'){
                     
                     setCookie('product_mode', 'list',99999);  
                       location.reload();
                }
			
            }
          
         });
      
	$('.products_left_grid_button').bind('click', function(){
                //grid
                setCookie('product_mode', 'grid',99999);  
                //window.location.href = location.href;
				 location.reload();
  
	});
	$('.products_right_grid_button').bind('click', function(){
                //list
             setCookie('product_mode', 'list',99999);  
               //window.location.href = location.href;
			    location.reload();
  	});
});
//]]>
</script>

<?php }} ?>
