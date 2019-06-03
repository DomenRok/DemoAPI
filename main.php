<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Main Site </title>
    <link rel="stylesheet" href="<?= CSS_URL . "main.css" ?>">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <?php
include_once("navbar.php");
?>

    <div class="jumbotron">
        <h1 class="display-4"> Browse songs!</h1>
        <p class="lead">You can upload songs, browse them & rate them.</p>
        <hr class="my-4">
        <p> Yeet </p>
    </div>




    <div class="container mt-4">
        <div class="row">
            <?php foreach($posts as $post): ?>
            <div class="col-auto mb-3">
                <div class="card" style="width: 18rem; height: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"> <?= $post['title'] ?> </h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text" style="
                        display:block;width:200px;text-overflow:ellipsis;;overflow:hidden;max-height:200px;
                        display: -webkit-box;
                        -webkit-line-clamp: 4;
                        -webkit-box-orient: vertical;
                        }"> 
                        <?= $post['content'] ?> </p>
                        <a href="<?= BASE_URL . "post?id=" . $post['id'] ?>" class="card-link"> <?= $post['id'] ?> </a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>


</body>

</html>