<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Browse post </title>
    <link rel="stylesheet" href="<?= BASE_URL . "main.css" ?>">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<?php include_once("navbar.php"); 
?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"><?= $post[0]['title'] ?></h1>
    <p class="lead"><?= $post[0]['content'] ?></p>
  </div>
</div>



    
</body>
</html>