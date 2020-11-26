





<?php $decision = $_POST['menu'] - 3 ;

echo "Décision ".$decision."<br>";

?>

<div class="validation_oui">
Votre décision <?php echo $decision ?> a bien été envoyé, vous pouvez encore la modifier si besoin.
</div>


<?php include("variationcom".$decision.".php"); ?>










