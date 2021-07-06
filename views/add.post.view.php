<?php require_once('partials/top.html'); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Blogger</a>
  <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Back to Blog</a>
      </li>
</nav>
<div class="container-fluid text-center bg-light.bg-gradient mt-5">
<h1>Add post</h1>
<?php if($post->postStatus): ?>
  <div class="alert alert-success" role="alert">
  Post is inserted!
</div>
<?php endif; ?>
<div class="row">
  <div class="col-8 offset-2">
    <form action="add.post.php" method="POST">
      <input type="text" name="post_title" class="form-control"
      placeholder="Title">
      <br>
      <textarea name="post_descrption" class="form-control"
        placeholder="Descrption"
       rows="8" cols="100"></textarea><br>
      <button type="submit" name="butSub" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
</div>

<?php require_once('partials/bottom.html'); ?>
