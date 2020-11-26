


<div class="box">
    <div class="box_menu">
      <button onclick="b(0)">Préparation des Critéres </button>
    </div>

	<div class="box_content">
	    <div id="d1">
    		<div class="titre">Parametres</div>
    		<form action="index.php" method="post" enctype="multipart/form-data">
    	</div>

	    <div id="d2">
    	</div>
	    <div id="d3">
    	</div>
	    <div id="d4">
    	</div>
	    <div id="d5">
    	</div>
	    <div id="d6">
    	</div>
	    <div id="d7">
    	</div>
   	    <div id="d8">
    	</div>




<div class="divTableRow">
<div class="divTableCell"><div class="tablecentre"> ATTENTION DANGER </div></div></div>

<div class="divTableRow"><div class="divTableCell">CC_Product1</div><form action="index.php" method="post" enctype="multipart/form-data">
<div class="divTableCell"><input type="number" id="param_cc_p1" value="<?php echo $_SESSION['param_cc_p1'] ?>" name="param_cc_p1"/></div></div>
<div class="divTableRow"><div class="divTableCell">CC_Product2</div>
<div class="divTableCell"><input type="number" id="param_cc_p2" value="<?php echo $_SESSION['param_cc_p2'] ?>" name="param_cc_p2"/></div></div>
<div class="divTableRow"><div class="divTableCell">CC_Product3</div>
<div class="divTableCell"><input type="number" id="param_cc_p3" value="<?php echo $_SESSION['param_cc_p3'] ?>" name="param_cc_p3"/></div></div>
<div class="divTableRow"><div class="divTableCell">CC_Product4</div>
<div class="divTableCell"><input type="number" id="param_cc_p4" value="<?php echo $_SESSION['param_cc_p4'] ?>" name="param_cc_p4"/></div></div>
<div class="divTableRow"><div class="divTableCell">CC_Product5</div>
<div class="divTableCell"><input type="number" id="param_cc_p4" value="<?php echo $_SESSION['param_cc_p4'] ?>" name="param_cc_p5"/></div></div>

<div class="divTableRow">
	<div class="divTableCell">PDV_Product1</div>
	<div class="divTableCell"><input type="number" id="param_pdv_p1" value="<?php echo $_SESSION['param_pdv_p1'] ?>" name="param_pdv_p1"/></div>
	<div class="divTableCell">Mini</div>
	<div class="divTableCell"><input type="number" id="param_pdv_mini_p1" value="<?php echo $_SESSION['param_pdv_mini_p1'] ?>" name="param_pdv_mini_p1"/></div>
	<div class="divTableCell">Maxi</div>
	<div class="divTableCell"><input type="number" id="param_pdv_maxi_p1" value="<?php echo $_SESSION['param_pdv_maxi_p1'] ?>" name="param_pdv_maxi_p1"/></div>
</div>

<div class="divTableRow">
	<div class="divTableCell">PDV_Product2</div>
	<div class="divTableCell"><input type="number" id="param_pdv_p2" value="<?php echo $_SESSION['param_pdv_p2'] ?>" name="param_pdv_p2"/></div>
	<div class="divTableCell">Mini</div>
	<div class="divTableCell"><input type="number" id="param_pdv_mini_p2" value="<?php echo $_SESSION['param_pdv_mini_p2'] ?>" name="param_pdv_mini_p2"/></div>
	<div class="divTableCell">Maxi</div>
	<div class="divTableCell"><input type="number" id="param_pdv_maxi_p2" value="<?php echo $_SESSION['param_pdv_maxi_p2'] ?>" name="param_pdv_maxi_p2"/></div>
</div>

<div class="divTableRow">
	<div class="divTableCell">PDV_Product3</div>
	<div class="divTableCell"><input type="number" id="param_pdv_p3" value="<?php echo $_SESSION['param_pdv_p3'] ?>" name="param_pdv_p3"/></div>
	<div class="divTableCell">Mini</div>
	<div class="divTableCell"><input type="number" id="param_pdv_mini_p3" value="<?php echo $_SESSION['param_pdv_mini_p3'] ?>" name="param_pdv_mini_p3"/></div>
	<div class="divTableCell">Maxi</div>
	<div class="divTableCell"><input type="number" id="param_pdv_maxi_p3" value="<?php echo $_SESSION['param_pdv_maxi_p3'] ?>" name="param_pdv_maxi_p3"/></div>
</div>

<div class="divTableRow">
	<div class="divTableCell">PDV_Product4</div>
	<div class="divTableCell"><input type="number" id="param_pdv_p4" value="<?php echo $_SESSION['param_pdv_p4'] ?>" name="param_pdv_p4"/></div>
	<div class="divTableCell">Mini</div>
	<div class="divTableCell"><input type="number" id="param_pdv_mini_p4" value="<?php echo $_SESSION['param_pdv_mini_p4'] ?>" name="param_pdv_mini_p4"/></div>
	<div class="divTableCell">Maxi</div>
	<div class="divTableCell"><input type="number" id="param_pdv_maxi_p4" value="<?php echo $_SESSION['param_pdv_maxi_p4'] ?>" name="param_pdv_maxi_p4"/></div>
</div>

<div class="divTableRow">
	<div class="divTableCell">PDV_Product5</div>
	<div class="divTableCell"><input type="number" id="param_pdv_p5" value="<?php echo $_SESSION['param_pdv_p5'] ?>" name="param_pdv_p5"/></div>
	<div class="divTableCell">Mini</div>
	<div class="divTableCell"><input type="number" id="param_pdv_mini_p5" value="<?php echo $_SESSION['param_pdv_mini_p5'] ?>" name="param_pdv_mini_p5"/></div>
	<div class="divTableCell">Maxi</div>
	<div class="divTableCell"><input type="number" id="param_pdv_maxi_p5" value="<?php echo $_SESSION['param_pdv_maxi_p5'] ?>" name="param_pdv_maxi_p5"/></div>
</div>


</div>
</div>


<div class="tablecentre"> ATTENTION DANGER CETTE ACTION VA EFFACER LA BDD <br> LA SESSION PRECEDENTE VA ETRE EFFACEE </div>



	<div class="submit_decision">	
	<input type=hidden name="menu" value=902>
	<input type=hidden name="refreshneufcentdeux" value=1>
	<input type="submit" value="Envoyer" />
	</form>
	</div>

   </div>
</div>



<script type="text/javascript">
	
function b( index ) {
 
 
    d1.style.display = "none"
    d2.style.display = "none"
    d3.style.display = "none"
    d4.style.display = "none"
    d5.style.display = "none"
    d6.style.display = "none"
    d7.style.display = "none"
    d8.style.display = "none"
     
    // range tous les éléments dans un tableau
    var arraysD = [ d1, d2, d3, d4, d5, d6, d7, d8 ]
     
    // selectionne l'élément dont l'index et donné en paramètre
    // pour le passé en display block
    arraysD[ index ].style.display = "block"
     
    // devrait vérifié si index à une valeur correct
}

</script>
