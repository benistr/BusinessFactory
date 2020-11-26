<?php 
if (isset($_POST['equipe']) && isset($_POST['password']))
{
  include("aside_log_post_oui.php");
}
else
{
    include("aside_log_post_non.php");
}



?>