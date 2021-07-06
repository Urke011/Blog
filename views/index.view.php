<?php require_once('partials/top.html'); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Blogger</a>
  <ul class="navbar-nav ms-auto">
    <?php if(isset($_SESSION['loggedUser'])): ?>
      <li class="nav-item">
        <a class="nav-link active" href="add.post.php">Add Post</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="upload.php">Upload video</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="logout.php">Logout</a>
      </li>
      <li class="nav-item">
        <button class="btn btn-warning"><?php echo $_SESSION['loggedUser']->name; ?></button>
      </li>
    <?php else: ?>
      <li class="nav-item">
        <a class="nav-link active" href="login_register.php">Login/Register</a>
      </li>
  <?php endif; ?>

</nav>
<div class="container-fluid text-center bg-light.bg-gradient">
<h1> Blogger posts</h1>
</div>
<div class="container">
  <div class="row">
    <div class="col-8 offset-2">
      <div class="card text-white bg-secondary mb-3">
        <?php foreach($posts as $post): ?>
  <div class="card-header"><h3><?php echo $post->title; ?><small><?php if(isset($_SESSION['loggedUser']) AND $post->user_id ==
  $_SESSION['loggedUser']->id): ?></small>
   <a href="index.php?post_id=<?php echo $post->id; ?>" class="btn btn-danger float-end">Remove</a>
  <?php endif; ?></h3>
  </div>

  <div class="card-body"><?php echo $post->description; ?></div>
  <div class="card-footer">
  <button class="btn btn-info float-end"><?php echo $post->created_at; ?></button>
  <button class="btn btn-warning float-start"><?php echo $user->getUserId($post->user_id)->name;?></button></div><br><br>
  <?php endforeach; ?>

  </div>
</div>
    </div>
  </div>
</div>
<?php require_once('partials/bottom.html'); ?>
