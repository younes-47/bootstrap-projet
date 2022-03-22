<?php $titre="Salam"; ?>
<?php ob_start()?>
<!-- code hna dyal acceuil-->
<p>salam</p>
<?php $contenu = ob_get_clean(); ?>
<?php require 'view/template.php'; ?>