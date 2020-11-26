<!-- DECONNECTION DE LA SESSION -->
<div class ='log_area' >
	<form class="login-form">
	<img src='avatar/00.png' border='0' alt='' /></p>
	<div class="slogan">
	<?php $_SESSION = array(); session_destroy(); ?>
	<span class="glyphicon glyphicon-remove" style="font-size: 25px; margin: 6px; color: #888888"></span>
	Au revoir ! </p>
	</div>
	<input type="submit" value="RETOUR" /></form>
</div>







