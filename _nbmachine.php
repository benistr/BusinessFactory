

<?php
$note = $_POST['menu'];

switch ($note)
{ 
    case 4: // dans le cas où $note vaut 0
        echo "Décision 1";
    break;
    
    case 5: // dans le cas où $note vaut 5
        echo "Décision 2";
    break;
    
    case 6: // dans le cas où $note vaut 7
        echo "Décision 3";
    break;
    
    case 7: // etc. etc.
        echo "Décision 4";
    break;
    
    case 8:
        echo "Décision 5";
    break;
    
    case 9:
        echo "Décision 6";
    break;
    
    default:
        echo "Heu ????";
}
?>