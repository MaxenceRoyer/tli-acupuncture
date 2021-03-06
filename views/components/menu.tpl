<!-- Authentication -->
<div id="authentication">
  {if empty($userSession)}
      <h1>Identification</h1>
	  <form id="formConnect" name="formConnect">
		  <span class="span_error" id="spanForm"></span>
		  <input type="email" id="email" name="email" aria-label="Adresse mail" placeholder="Adresse mail" required tabindex="5" />
		  <input type="password" id="password" name="password" aria-label="Mot de passe" placeholder="Mot de passe" required tabindex="6" />
		  <input type="button" id="connect" name="connect" aria-label="ENVOYER" value="ENVOYER" class="button_my_style" tabindex="7" />
	  </form>
	  <br />
	  <a href="inscription" tabindex="8">S'enregistrer</a>
	  {literal}
	    <script type="text/javascript" src="views/statics/js/md5.js"></script> 
		<script type="text/javascript" src="views/statics/js/connection.js"></script>
	  {/literal}
   {else}
      <h1>Espace Membre</h1>
	  <p>Bienvenue sur le site {$userSession->getPseudonymeU()} !</p>
	  <p id="disconnect" tabindex="9">Se déconnecter</p>
	  {literal}
		<script type="text/javascript" src="views/statics/js/disconnection.js"></script>
	  {/literal}
   {/if}
</div>