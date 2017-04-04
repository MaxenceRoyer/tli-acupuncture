<?php
/* Smarty version 3.1.30, created on 2017-03-24 13:03:17
  from "C:\wamp64\www\tli-acupuncture\views\content-pages\pathologies.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d519152df692_73129206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb5f0dc9db6556aadc0bfceeff588ff50d28d30a' => 
    array (
      0 => 'C:\\wamp64\\www\\tli-acupuncture\\views\\content-pages\\pathologies.tpl',
      1 => 1490190103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d519152df692_73129206 (Smarty_Internal_Template $_smarty_tpl) {
?>
		  <!-- Content -->
          <div id="content_page" role="main">
			  <section class="stripped">
				  <h1>Liste des pathologies</h1>
				  <?php if (!empty($_smarty_tpl->tpl_vars['userSession']->value)) {?>
				  	<span class="span_error" id="spanSearchPathoError"></span>
				  	<input type="search" placeholder="Entrez un mot-clef" id="searchPatho" name="searchPatho">
				  	
						<?php echo '<script'; ?>
 type="text/javascript" src="views/statics/js/search-patho.js"><?php echo '</script'; ?>
>
				    
				  <?php } else { ?>
				  	<b class="span_error">Connectez-vous pour avoir accès à des fonctionnalités supplémentaires.</b>
				  <?php }?>
				  <div id="containerPatho">
					  <table id="containerPathoTable">
						  <tr>
							  <th>Identifiant</th>
							  <th>Méridien</th>
					  		  <th>Type</th>
							  <th>Description</th>
							  <th class="text_align_center">#</th>
						  </tr>
						  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allPatho']->value, 'patho');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['patho']->value) {
?>
							  <tr>
								  <td class="idPatho"><?php echo $_smarty_tpl->tpl_vars['patho']->value->getIdP();?>
</td>
								  <td class="merPatho"><?php echo $_smarty_tpl->tpl_vars['patho']->value->getMer();?>
</td>
								  <td class="typePatho"><?php echo $_smarty_tpl->tpl_vars['patho']->value->getType();?>
</td>
								  <td class="descPatho"><?php echo $_smarty_tpl->tpl_vars['patho']->value->getDesc();?>
</td>
								  <td class="imgPatho">
									  <a href="detailsSymptomes_<?php echo $_smarty_tpl->tpl_vars['patho']->value->getIdP();?>
">
										  <img src="views/statics/img/view.png" title="Voir les symptomes" class="img_symptomes">
									  </a>								  
								  </td>
							  </tr>
						  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					  </table>
				  </div>
			  </section>
          </div><?php }
}
