<div class="item">
<label for="product4creditclient">Crédit client (jours) :</label>
<select name="product4icreditclient_p1" id="product4creditclient">
    <option value="0" <?php if ($_SESSION['product4icreditclient_p1'] == 0) { echo "selected"; } ?>  >0</option>
    <option value="15"<?php if ($_SESSION['product4icreditclient_p1'] == 15) { echo "selected"; } ?> >15</option>
    <option value="30"<?php if ($_SESSION['product4icreditclient_p1'] == 30) { echo "selected"; } ?> >30</option>
    <option value="45"<?php if ($_SESSION['product4icreditclient_p1'] == 45) { echo "selected"; } ?> >45</option>
    <option value="60"<?php if ($_SESSION['product4icreditclient_p1'] == 60) { echo "selected"; } ?> >60</option>
    <option value="75"<?php if ($_SESSION['product4icreditclient_p1'] == 75) { echo "selected"; } ?> >75</option>
    <option value="90"<?php if ($_SESSION['product4icreditclient_p1'] == 90) { echo "selected"; } ?> >90</option>
</select>
</div>