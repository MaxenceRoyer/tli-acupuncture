<?php
/* Smarty version 3.1.30, created on 2017-05-08 19:41:28
  from "/opt/lampp/htdocs/tli-acupuncture/views/content-pages/pathologies.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5910adc840d850_88993893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55453792bf9082e22d209dcda3d256a6e8257aa1' => 
    array (
      0 => '/opt/lampp/htdocs/tli-acupuncture/views/content-pages/pathologies.tpl',
      1 => 1494263811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5910adc840d850_88993893 (Smarty_Internal_Template $_smarty_tpl) {
?>
		  <!-- Content -->
          <div id="content_page" role="main">
			  <section class="stripped">
				  <h2>Liste des pathologies</h2>
				  <?php if (!empty($_smarty_tpl->tpl_vars['userSession']->value)) {?>
				  	<span class="span_error" id="spanSearchPathoError"></span>
				  	<input type="search" placeholder="Entrez un mot-clef" id="searchPatho" name="searchPatho" tabindex="21">
				  	
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
										  <img src="views/statics/img/view.png" alt="Voir les symptomes" class="img_symptomes">
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
