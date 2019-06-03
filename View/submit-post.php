<?php
    include("navbar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= CSS_URL . "main.css" ?>">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> Submit a poem</title>
</head>
<body>
<form action="<?= BASE_URL . "submit" ?>" method="POST">
  <div class="form-group">
    <label for="title"> Title </label>
    <input type="text" class="form-control" id="title" name="title" placeholder="A song of fire and flame">
  </div>

  <div class="form-group">
    <label for="poem"> Poem </label>
    <textarea class="form-control" id="content" name="content" value="poem">
    </textarea>
  </div>

  <?php if (!empty($status)): ?>
    <p class="text-primary"><?= $status ?></p>
  <?php endif; ?>

  <button class="btn btn-primary" type="submit"> Submit </button>



</form>

</form>
</body>
</html>