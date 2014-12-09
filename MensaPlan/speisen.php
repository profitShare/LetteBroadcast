<?php
include('global.php');
include('header.php');
?>
    <ul class="nav nav-pills">
      <li class="active"><a href="#">Startseite</a></li>
      <li><a href="#">Speiseplan</a></li>
      <li><a href="speisen.php">Speisen</a></li>
      <li><a href="#">Zusatzstoffe</a></li>
  </ul>
  <div class="page-header">
    <h1>Speisen <small>erstellen oder bearbeiten</small></h1>
  </div>
  <form class="form-horizontal" role="form">
  <div class="form-group">
    <label for="speisename" class="col-sm-2 control-label">Speisename</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="speisename" placeholder="Reis mit Gemüse" required>
    </div>
  </div>
  <div class="form-group">
    <label for="speisetyp" class="col-sm-2 control-label">Speisetyp</label>
    <div class="col-sm-10">
      <select class="form-control" id="speisetyp">
	<option>Vorspeise</option>
	<option>Hauptspeise</option>
	<option>Nachspeise</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="diaetspeise" class="col-sm-2 control-label">Diätspeise</label>
    <div class="col-sm-10">
      <div class="checkbox">
    <label>
      <input type="checkbox"> Ja
    </label>
  </div>
    </div>
  </div>
  <div class="form-group">
    <label for="speisetyp" class="col-sm-2 control-label">Beschreibung</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="2" placeholder="Schonend gegarter Reis aus der Himalaya Region mit Japanischem Gemüse und Brötchen als Beilage."></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="beachte" class="col-sm-2 control-label">Beachte</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="beachte" placeholder="Enthält Spuren von Nüssen">
    </div>
  </div>
  <div class="form-group">
    <label for="preis" class="col-sm-2 control-label">Preis</label>
    <div class="col-sm-10">
      <div class="input-group" style="width:120px;">
      <input type="text" class="form-control" placeholder="2,90">
      <span class="input-group-addon">€</span>
    </div>
    </div>
  </div>
  <div class="form-group">
    <label for="kcal" class="col-sm-2 control-label">Kcal</label>
    <div class="col-sm-10">
      <div class="input-group" style="width:120px;">
      <input type="text" class="form-control" placeholder="1440">
      <span class="input-group-addon">kcal</span>
    </div>
    </div>
  </div>
  <div class="form-group">
    <label for="eiweiss" class="col-sm-2 control-label">Eiweiß</label>
    <div class="col-sm-10">
      <div class="input-group" style="width:120px;">
      <input type="text" class="form-control" placeholder="200">
      <span class="input-group-addon">g</span>
    </div>
    </div>
  </div>
  <div class="form-group">
    <label for="fett" class="col-sm-2 control-label">Fett</label>
    <div class="col-sm-10">
      <div class="input-group" style="width:120px;">
      <input type="text" class="form-control" placeholder="70">
      <span class="input-group-addon">g</span>
    </div>
    </div>
  </div>
  <div class="form-group">
    <label for="kohlenhydrate" class="col-sm-2 control-label">Kohlenhydrate</label>
    <div class="col-sm-10">
      <div class="input-group" style="width:120px;">
      <input type="text" class="form-control" placeholder="200">
      <span class="input-group-addon">g</span>
    </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" class="btn btn-default" value="Hinzufügen"/>
    </div>
  </div>
</form>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>