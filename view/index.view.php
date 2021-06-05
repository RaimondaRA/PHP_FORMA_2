<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="view/css/style.css "type="text/css">
    <script src="js/bootstrap.min.js"></script>
    <script src="script.js"></script>
    <title>Forma</title>
</head>
<body>
<section>
<?php if (isset($_POST['send'])):?>
<?php validation($_POST);?>
<?php if(empty($validation)){
storeData();
}
 ?>
<?php endif ?>
</section>

<?php
if(isset($validation)){
    foreach ($validation as $error){
        echo $error;
    }
}
?>

<form method="post">
<div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Vardas:</label>
    <div class="col-sm-5">
      <input type="name" class="form-control" id="inputName" name="fname" required/>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputSurname" class="col-sm-2 col-form-label">Pavardė:</label>
    <div class="col-sm-5">
      <input type="surname" class="form-control" id="inputSurname" name="lname" required/>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label">El. pašto adresas:</label>
    <div class="col-sm-5">
      <input type="email" class="form-control" id="inputEmail" name="email" required/>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputDepartment" class="col-sm-2 col-form-label">Departamentas:</label>
    <div class="col-sm-5">
      <div class="input-group-prepend"></div>
    <select class="custom-select" id="inputGroupSelect" name=departments" required/>
      <option selected>-</option>
      <option value="IT">IT</option>
      <option value="Fiansai">Finansai</option>
      <option value="HR">HR</option>
      <option value="Teise">Teisė</option>
    </select>
  </div>
  </div>

  <div class="form-group row">
    <label for="textarea" class="col-sm-2 col-form-label">Žinutė
    <div class="emptyarea"></div></label>
    <div class="col-sm-5">
    <textarea class="form-control" id="textarea" name="textArea" rows="3"></textarea>
  </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label"></label>
    <div class="col-sm-5">
    <input type="submit" class="btn btn-primary" value="Pateikti" name="send">
  </div>
  </div>
</form>

<ul>
<?php
if(isset($_POST ['send'])){
    foreach ($_POST as $label => $item){
      $item = htmlspecialchars($item);
      echo "<li>$label:$item</li>";
    }
}
?>
</ul>
</body>
</html>