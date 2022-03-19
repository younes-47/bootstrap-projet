<?php $titre="Erreur !" ; ?>
<?php ob_start() ; ?>
<!-- hna ghadi n2afichiw nefss template fiha message mani kitra chi erreur o dak variable $msgErreur fih message dyal exception-->
<p>Une erreur est survenue : <?= $msgErreur ?></p>
<?php $contenu = ob_get_clean() ; ?>
<?php require 'template.php' ; ?>