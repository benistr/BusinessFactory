<div class="item">
<label for="product2creditclient">Crédit client (jours) :</label>
<select name="product2icreditclient_p5" id="product2creditclient">
    <option value="0" <?php if ($_SESSION['product2icreditclient_p5'] == 0) { echo "selected"; } ?>  >0</option>
    <option value="15"<?php if ($_SESSION['product2icreditclient_p5'] == 15) { echo "selected"; } ?> >15</option>
    <option value="30"<?php if ($_SESSION['product2icreditclient_p5'] == 30) { echo "selected"; } ?> >30</option>
    <option value="45"<?php if ($_SESSION['product2icreditclient_p5'] == 45) { echo "selected"; } ?> >45</option>
    <option value="60"<?php if ($_SESSION['product2icreditclient_p5'] == 60) { echo "selected"; } ?> >60</option>
    <option value="75"<?php if ($_SESSION['product2icreditclient_p5'] == 75) { echo "selected"; } ?> >75</option>
    <option value="90"<?php if ($_SESSION['product2icreditclient_p5'] == 90) { echo "selected"; } ?> >90</option>
</select>
</div>