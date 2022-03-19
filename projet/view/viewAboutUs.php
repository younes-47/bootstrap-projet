<?php $titre="à propos de nous!"; ?>
<?php ob_start()?>
<!-- hna dkchi li ghaykon f à propos de nous texte html o bootstrap o dk l9lawi -->



<?php $contenu = ob_get_clean(); ?>
<!-- mani tatsali code kayt7at f variable $contenu o tayt3ammar f template.php, ob_start() 
tatkhali buffer y3mr bla matsift chi 9lwa l browser o ob_get_clean() tatsift contenue dyal buffer 
f7ali tatgol l serveur hta nsaliw 3ad sift dkchi kaml bla matsift b7aja b7aja hh-->
<?php require 'template.php'; ?>