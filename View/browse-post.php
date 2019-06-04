<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Browse post </title>
    <link rel="stylesheet" href="<?= BASE_URL . "main.css" ?>">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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

<style>
@import url(https://fonts.googleapis.com/css?family=Lato:300,400);
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
*,
*:before,
*:after {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  transition: all 0.2s ease;
}

body, html {
  height: 100%;
  width: 100%;
}

body {
  font-family: "Lato", sans-serif;
  font-size: 1rem;
  color: #333;
  background-color: #f4f4f4;
}

.user_avatar {
  width: 65px;
  height: 65px;
  display: inline-block;
  vertical-align: middle;
}
.user_avatar img {
  width: 100%;
  height: 100%;
  border-radius: 50%;
}

.comment_block {
  width: 65%;
  height: 100%;
  margin: 0 auto;
  padding: 10px;
}
.comment_block .create_new_comment {
  width: 100%;
  padding: 20px 0;
}
.comment_block .create_new_comment .input_comment {
  display: inline-block;
  vertical-align: middle;
  margin-left: 10px;
  width: calc(100% - 75px);
}
.comment_block .create_new_comment .input_comment input[type="text"] {
  width: 100%;
  font-family: "Lato", sans-serif;
  font-weight: 300;
  font-size: 1.3rem;
  padding: 10px;
  border: none;
  border-bottom: 2px solid #f2f2f2;
}
.comment_block .create_new_comment .input_comment input[type="text"]:focus {
  outline: none;
  border-bottom: 2px solid #e6e6e6;
}
.comment_block .new_comment {
  width: 100%;
  height: auto;
  padding: 20px 0;
  border-top: 1px solid #e6e6e6;
}
.comment_block .new_comment .user_comment {
  list-style-type: none;
}
.comment_block .new_comment .comment_body {
  display: inline-block;
  vertical-align: middle;
  width: calc(100% - 75px);
  min-height: 65px;
  margin-left: 10px;
  padding: 5px 10px;
  font-size: .9rem;
  color: #555;
  background-color: #FFF;
  border-bottom: 2px solid #f2f2f2;
}
.comment_block .new_comment .comment_body .replied_to {
  margin: 5px 0px;
  background-color: #fafafa;
  border-bottom: 2px solid #f2f2f2;
  border-radius: 5px;
}
.comment_block .new_comment .comment_body .replied_to p {
  padding: 5px;
}
.comment_block .new_comment .comment_body .replied_to span {
  color: #6495ED;
  margin-right: 2px;
}
.comment_block .new_comment .comment_toolbar {
  width: 100%;
}
.comment_block .new_comment .comment_toolbar ul {
  list-style-type: none;
  padding-left: 75px;
  font-size: 0;
}
.comment_block .new_comment .comment_toolbar ul li {
  display: inline-block;
  padding: 5px;
  font-size: .7rem;
  color: #d9d9d9;
}
.comment_block .new_comment .comment_toolbar ul li:hover {
  cursor: pointer;
}
.comment_block .new_comment .comment_toolbar .comment_details {
  display: inline-block;
  vertical-align: middle;
  width: 70%;
  text-align: left;
}
.comment_block .new_comment .comment_toolbar .comment_tools {
  display: inline-block;
  vertical-align: middle;
  width: 30%;
  text-align: right;
}
.comment_block .new_comment .comment_toolbar .comment_tools li:hover {
  color: #CCC;
}
.comment_block .new_comment .user:hover {
  color: #6495ED;
  text-decoration: underline;
}
.comment_block .new_comment .love:hover {
  color: #FF6347;
}
</style>


<!-- comments container -->
<div class="comment_block">

<!-- 
  Comments are structured in the following way:

  {ul} defines a new comment (singular)
  {li} defines a new reply to the comment {ul}

  example:

  <ul>
    <comment>
      
    </comment

      <li>
        <reply>

        </reply>
      </li>

      <li>
        <reply>

        </reply>
      </li>

      <li>
        <reply>

        </reply>
      </li>
  </ul>

 -->

 <div class="create_new_comment">

<div class="input_comment">
     <form action="<?= BASE_URL . "submit-comment" ?>" method="POST">
     <input type="hidden" name="post_id" value="<?= $post[0]['id'] ?>">
       <input type="text" name="comment" placeholder="Join the conversation.." pattern=".{3,}" required title="3 characters minimum">
       <button type="submit" class="btn btn-primary"> Add Comment </button>
     </form>
   </div>

 </div>

 <?php
   if (empty($comments)) {
      echo "<b> 0 Comments<b>";
    }
    ?>

 <!-- new comment -->
 <div class="new_comment">




   
    <?php foreach($comments as $comment): ?>
      </ul>
      <ul class="user_comment">

        <div class="user_avatar">
        <?= $comment['username'] ?>
        </div><div class="comment_body">
          <p><?= $comment['message']  ?></p>
        </div>
      </ul>
    <?php endforeach; ?>
    

    

 </div>

<!-- new comment -->

   </ul>

 </div>

</div>




</body>

</html>