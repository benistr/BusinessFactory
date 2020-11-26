<div class ='log_area' >
<form class="login-form" action="index.php" method="post">


<?php

$picture = 'avatar/'.$_SESSION['equipe'].'.png';



echo '<img src='.$picture.'?'.filectime($picture).' border=\'0\' alt=\'\' />';


?>
<h2 class="aside-title">> Informations</h2>
<div class="nom">
<?php echo '<span class="glyphicon glyphicon-ok" style="font-size: 25px; margin: 6px; color: #888888"></span>' . $_SESSION['nom'] . '<br>' ?>
</div>
<div class="slogan">
<?php echo $_SESSION['slogan'] . '<br><br>' ?>
</div>

<input type=hidden name="reset" value=1>
<input type="submit" value="DECONNEXION"/>
<br>
<h2 class="aside-title">> Menu</h2>
</form>
</div>