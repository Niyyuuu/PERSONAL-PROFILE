<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div style="padding-left:20px;" class="container-fluid">
      <div class="account">
        <a class="navbar-brand" href="adminpage.php"><i class="fa fa-user" aria-hidden="true"></i> Niu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div style="padding-right:20px;">
        <a class="nav-link active" href="admin-out.php">Log Out</a>
      </div>
    </div>
  </nav>

  <h1 style="padding-left:90px; padding-top: 30px; font-size:25px;">Hallo Admin!</h1>
  <div style="display: flex; padding-top: 30px;">
    <div style="padding-left: 30px; padding-top: 10px;">
      <div style="display:flex; padding-left:5px; width:450px;" class="card">
        <div class="card-body">
          <h5 class="card-title">Comment</h5>
          <p class="card-text">Place for view or deleting a comments.</p>
          <div style="display:flex; justify-content: right;">
            <a href="comment-page.php" class="btn btn-primary">Go</a>
          </div>
        </div>
      </div>
    </div>
    <div style="padding-left: 30px; padding-top: 10px;">
      <div class="card" style="padding-left:25px; width: 450px; ">
        <div class="card-body">
          <h5 class="card-title">Skills</h5>
          <p class="card-text">Place for create, read, update, and delete a skills.</p>
          <div style="display:flex; justify-content: right;">
            <a href="skills.php" class="btn btn-primary">Go</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>