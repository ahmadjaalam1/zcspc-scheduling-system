<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/faf20bb39b.js" crossorigin="anonymous"></script>
    <title>Admin</title>
</head>
<body>
   <!-- navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-nav">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="logo.png" class="nav-logo" alt="logo">
        ZSCPS Scheduling System
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="row">
        <div class="collapse navbar-collapse" id="navbarText">
            
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="admin.php"><span><i class="fas fa-home"></i></span> Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="student.php"><span><i class="fas fa-user"></i></span> Student</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="schedule.php"><span><i class="fas fa-calendar"></span></i> Schedule</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="adprof.php"><span><i class="fas fa-user-cog"></i></span> Profile</a>
                </li>
                <li class="nav-item">
                <a class="nav-link btn border-light" href="logout.php"><span><i class="fas fa-sign-out-alt"></i></span> Logout</a>
                </li>
            </ul>
        </div>
    </div>
  </div>
</nav>
<!-- end of navigation -->