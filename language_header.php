<aside class='action-wrapper'><!-- Bandeau langue de recherche séléctionné -->
  <div class='action-panel'>
    <div class='container-fluid'>
      <div class='action-panel-form'>
        <div class='action-panel-form-item action-panel-form-item-language'>
          <a class='action-panel-form-language-switch action-links-toggle' href='#' role='button'>
            <span class='material-icons'>Langue de recherche</span>
<?php
if($_GET['l']=="fr"){
?>	
            <span class="flag fr">français</span><i class="fa fa-hand-o-right"></i><span class="flag de">allemand</span><span class="flag id">alsacien</span><span class="flag en">anglais</span>	
<?php	
}else if($_GET['l']=="gsg"){
?>
            <span class="flag de">allemand</span><i class="fa fa-hand-o-right"></i><span class="flag id">alsacien</span><span class="flag en">anglais</span><span class="flag fr">français</span>
<?php		
}else if($_GET['l']=="eng"){
?>
			<span class="flag en">anglais</span><i class="fa fa-hand-o-right"></i><span class="flag de">allemand</span><span class="flag id">alsacien</span><span class="flag fr">français</span>
<?php
}else if($_GET['l']=="gsw"){
?>
			<span class="flag id">alsacien</span><i class="fa fa-hand-o-right"></i><span class="flag de">allemand</span><span class="flag en">anglais</span><span class="flag fr">français</span>
<?php
}else{
?>
			<span class="flag fr">français</span><i class="fa fa-hand-o-right"></i><span class="flag de">allemand</span><span class="flag id">alsacien</span><span class="flag en">anglais</span>
<?php
	
}
?>
          </a>
        </div>
      </div>
    </div>
  </div>
</aside><!-- FIN Bandeau langue de recherche séléctionné -->		

<aside class="action-links"><!-- Bandeau langue de recherche séléctionné -->
  <div class="container-fluid">
    <div class="dict-switch-help">
      <h3>Langue de recherche</h3>
      <p>Le saviez-vous ? Notre dictionnaire est multilingue, vous pouvez donc chercher des mots dans toutes les langues de la liste.</p>
    </div>
    <nav class="dict-select-wrapper">
      <div class="dict-select-column">
        <h4 class="dict-select-portion-header">Dictionnaire Allemand</h4>
        <ul>
<li onclick="javascript:location.href='index.php?l=gsg'"><a href="" class="action-links-toggle"><span class="flag de">allemand</span><i class="fa fa-hand-o-right"></i><span class="flag id">alsacien</span><span class="flag en">anglais</span><span class="flag fr">français</span> allemand -> alsacien - anglais - français </a></li>
		</ul>
		 <h4 class="dict-select-portion-header">Dictionnaires Alsacien</h4>
        <ul>
<li onclick="javascript:location.href='index.php?l=gsw'"><a href="" class="action-links-toggle"><span class="flag id">alsacien</span><i class="fa fa-hand-o-right"></i><span class="flag de">allemand</span><span class="flag en">anglais</span><span class="flag fr">français</span> alsacien -> allemand - anglais - français</a></li>
		</ul>
      </div>
      <div class="dict-select-column">
        <h4 class="dict-select-portion-header">Dictionnaires Anglais</h4>
        <ul>
<li onclick="javascript:location.href='index.php?l=eng'"><a href="" class="action-links-toggle"><span class="flag en">anglais</span><i class="fa fa-hand-o-right"></i><span class="flag de">allemand</span><span class="flag id">alsacien</span><span class="flag fr">français</span> anglais -> allemand - alsacien - français</a></li>
		</ul>
		<h4 class="dict-select-portion-header">Dictionnaires Français</h4>
        <ul>
<li onclick="javascript:location.href='index.php?l=fr'"><a href="" class="action-links-toggle"><span class="flag fr">français</span><i class="fa fa-hand-o-right"></i><span class="flag de">allemand</span><span class="flag id">alsacien</span><span class="flag en">anglais</span> français -> allemand - alsacien - français</a></li>
		</ul>
      </div>
    </nav>
  </div>
</aside><!-- FIN Bandeau séléction langue de recherche -->	