<?php $titre=""; ?>
<?php ob_start()?>
<!-- code hna -->

<?php
    require 'models/donations.php';
    try{
        $donations = getDonations();
    }catch(PDOException $e){
        $msgErreur = $e->getMessage();
        require 'view/viewErreur.php';
    }
?>
<?php foreach ($donations as $don) : ?>

    <table>
       <!-- chi table dyal ga3 donations li tdaro 3la chkel boxes ola chi 9lwa foreach bach tjbd mn base de donnés -->
    </table>
       
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>
<?php require 'template.php'; ?>