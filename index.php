<!doctype html>
<html lang="en">
<head>
  <!--Meta-->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!--CSS-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/lib/materialize/materialize.min.css" media="screen">
  <link rel="stylesheet" href="assets/css/app.css">
  
  <!--Title-->
  <title>Schedule IT</title>
</head>
<body>
  <!--Nav-->
  <?php include('nav.php') ?>

  <!--Calendar Filters-->
  <div class="row">
    <!--Campus-->
    <div class="col s12 m2 input-field">
      <select id="filter-campus" name="filter-campus">
        <option value="auburn">Auburn</option>
        <option value="kent">Kent</option>
      </select>
      <label>Campus</label>
    </div>
    <!--Room-->
    <button class="btn-large waves-effect waves-light green"
      id="filter-room" name="filter-room" type="submit">by Room
      <i class="material-icons right">business</i>
    </button>
    <!--Instructor-->
    <button class="btn-large waves-effect waves-light green"
      id="filter-instructor" name="filter-instructor" type="submit">by Instructor
      <i class="material-icons right">perm_identity</i>
    </button>
  </div>

  <div class="divider"></div>

  <!--Calendar-->
  <div class="row" id="main">
    <div class="col s12">
      <h1>CALENDAR HERE</h1>
    </div>
  </div>

  <!--Scripts-->
  <script rel="text/javascript" src="assets/js/lib/jquery/jquery-3.0.0.min.js"></script>
  <script rel="text/javascript" src="assets/js/lib/materialize/materialize.min.js"></script>
  <script rel="text/javascript" src="assets/js/index.js"></script>
  <script rel="text/javascript" src="assets/js/panel.js"></script>
</body>
</html>

<?php
?>