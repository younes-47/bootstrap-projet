<?php $titre="Erreur !" ; ?>
<?php ob_start() ; ?>
<p>Votre donation a été effectué avec succès! 
    Merci pour votre générosité</p>
<?php $contenu = ob_get_clean() ; ?>
<?php require 'template.php' ; ?>