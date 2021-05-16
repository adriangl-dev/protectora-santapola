<?php /* Smarty version Smarty-3.1.19, created on 2019-02-12 22:11:15
         compiled from "/var/www/protectorasantapola/themes/pos_petsyshop/modules/blockpermanentlinks/blockpermanentlinks-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17287878685c633673c50c31-40464496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e359c8289053f9a4cf8258cba62659ed7ad9068b' => 
    array (
      0 => '/var/www/protectorasantapola/themes/pos_petsyshop/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1550000748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17287878685c633673c50c31-40464496',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c633673c9c968_44114278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c633673c9c968_44114278')) {function content_5c633673c9c968_44114278($_smarty_tpl) {?>

<!-- Block permanent links module HEADER -->
<ul id="header_links">

 
 <li><a class="link-mycart" href="/content/6-sobre-nosotros" title="<?php echo smartyTranslate(array('s'=>'Sobre nosotros','mod'=>'blockcart'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Quienes somos','mod'=>'blockcart'),$_smarty_tpl);?>
</a></li>
 <li id="header_link_contact"><a class="link-contact" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
 <li id="header_link_colabore"><a class="link-contact" href="/content/12-colabora" title="<?php echo smartyTranslate(array('s'=>'Colabora','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Colabora','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
 <li id="header_link_colabore" class="last"><a class="link-contact" href="/content/15-carrera-mas-animal" title="<?php echo smartyTranslate(array('s'=>'Carrera más animal','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Carrera más animal','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>

 
 
 
 
 <?php $_smarty_tpl->tpl_vars['context'] = new Smarty_variable(Context::getContext(), null, 0);?>

 
 
 
 
 
</ul>
<!-- /Block permanent links module HEADER -->
<?php }} ?>
