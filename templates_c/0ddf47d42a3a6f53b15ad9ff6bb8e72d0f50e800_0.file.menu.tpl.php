<?php
/* Smarty version 3.1.30, created on 2017-03-24 13:03:07
  from "C:\wamp64\www\tli-acupuncture\views\components\menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d5190bb8e346_39599635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ddf47d42a3a6f53b15ad9ff6bb8e72d0f50e800' => 
    array (
      0 => 'C:\\wamp64\\www\\tli-acupuncture\\views\\components\\menu.tpl',
      1 => 1490174517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d5190bb8e346_39599635 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Authentication -->
<div id="authentication">
  <?php if (empty($_smarty_tpl->tpl_vars['userSession']->value)) {?>
      <h1>Identification</h1>
	  <form id="formConnect" name="formConnect">
		  <span class="span_error" id="spanForm"></span>
		  <input type="email" id="email" name="email" aria-label="Adresse mail" placeholder="Adresse mail" required />
		  <input type="password" id="password" name="password" aria-label="Mot de passe" placeholder="Mot de passe" required />
		  <input type="button" id="connect" name="connect" aria-label="ENVOYER" value="ENVOYER" class="button_my_style" />
	  </form>
	  <br />
	  <a href="inscription">S'enregistrer</a>
	  
	    <?php echo '<script'; ?>
 type="text/javascript" src="views/statics/js/md5.js"><?php echo '</script'; ?>
> 
		<?php echo '<script'; ?>
 type="text/javascript" src="views/statics/js/connection.js"><?php echo '</script'; ?>
>
	  
   <?php } else { ?>
      <h1>Espace Membre</h1>
	  <p>Bienvenue sur le site <?php echo $_smarty_tpl->tpl_vars['userSession']->value->getPseudonymeU();?>
 !</p>
	  <p id="disconnect">Se déconnecter</p>
	  
		<?php echo '<script'; ?>
 type="text/javascript" src="views/statics/js/disconnection.js"><?php echo '</script'; ?>
>
	  
   <?php }?>
</div><?php }
}