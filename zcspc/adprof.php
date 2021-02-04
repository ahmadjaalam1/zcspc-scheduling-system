
<?php require_once "nav.php";?>
<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 <br>
 <div class="container-fluid col-10 ">
 <form name="chngpwd" action="changepss.php" method="POST"  >
 <div class="card" style="width: 30rem;">
  
  <div class="card-header">
    Change Password
  </div>
   
  
    
  <div class="col-12">
  <label  class="form-label">Old Password</label>
    <input type="text" name="oldpwd" class="form-control col-4" id="oldpwd" >
  </div>

  <div class="col-12">
    <label  class="form-label">New Password</label>
    <input type="password" name="newpwd" class="form-control col-4" id="timess" >
  </div>

  <div class="col-12">
  <label  class="form-label">Confirm Password</label>
  <input type="password" class="form-control col-4" id="timess" name="confrmpwd"> 
  </div>
 
  <div class="col-12">
    <button type="submit"  class="form-control btn-secondary" name="submit" >Apply</button>
  </div>
  
  </div>
  </form>
 </div>
 </div>
 <br>

 <div class="row g-3">
    <div class="container-fluid  col-8">
    <form action="schedset.php" method="POST"> 
    <div class="card border-dark col-7">
                                <div class="card-header ">
                                <center>Set Schedule here!!</center>
                                   
                                </div>
                                <div class="card-body">
                                <form class="row g-3">
                                <div class="col-12">
    <label  class="form-label">Date</label>
    <input type="date" class="form-control col-4" id="datess" name="datess">
  </div>
  <div class="col-12">
    <label  class="form-label">Time</label>
    <input type="time" class="form-control col-4" id="timess" name="times">
  </div>
  <div class="col-12">
    <label  class="form-label">Activity</label>
    <input type="text" class="form-control col-4" id="tactive" placeholder="activity" name="activities">
  </div>
 
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sets</button>
  </div>
</form>
 </div>  
 </div>

 </div>


 
  </body>
</html>

                                
                             

                            