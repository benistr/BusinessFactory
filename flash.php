
<div class="nom">
<?php

if (isset($_SESSION['id']))
{
echo $_SESSION['equipe'].' - '.$_SESSION['nom'];
}


?>
</div>

<div class="menub">
	<form action="index.php" method="post" enctype="multipart/form-data">
	<input type=hidden name="menu" value=100>
	<input type="submit" value="Zoom" />
</form>
</div>

<div class="menub">
	<form action="index.php" method="post" enctype="multipart/form-data">
	<input type=hidden name="menu" value=101>
	<input type="submit" value="Participants" />
</form>
</div>

<div class="menub">
	<form action="index.php" method="post" enctype="multipart/form-data">
	<input type=hidden name="menu" value=102>
	<input type="submit" value="Livrets" />
</form>
</div>

<div class="menub">
	<form action="index.php" method="post" enctype="multipart/form-data">
	<input type=hidden name="menu" value=103>
	<input type="submit" value="Logos" />
</form>
</div>

<div class="menub">
	<form action="index.php" method="post" enctype="multipart/form-data">
	<input type=hidden name="menu" value=105>
	<input type="submit" value="Affiches" />
</form>
</div>

