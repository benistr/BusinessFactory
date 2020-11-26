<div class="item">
<label for="product5creditclient">Crédit client (jours) :</label>
<select name="product5icreditclient_p2" id="product5creditclient">
    <option value="0" <?php if ($_SESSION['product5icreditclient_p2'] == 0) { echo "selected"; } ?>  >0</option>
    <option value="15"<?php if ($_SESSION['product5icreditclient_p2'] == 15) { echo "selected"; } ?> >15</option>
    <option value="30"<?php if ($_SESSION['product5icreditclient_p2'] == 30) { echo "selected"; } ?> >30</option>
    <option value="45"<?php if ($_SESSION['product5icreditclient_p2'] == 45) { echo "selected"; } ?> >45</option>
    <option value="60"<?php if ($_SESSION['product5icreditclient_p2'] == 60) { echo "selected"; } ?> >60</option>
    <option value="75"<?php if ($_SESSION['product5icreditclient_p2'] == 75) { echo "selected"; } ?> >75</option>
    <option value="90"<?php if ($_SESSION['product5icreditclient_p2'] == 90) { echo "selected"; } ?> >90</option>
</select>
</div>