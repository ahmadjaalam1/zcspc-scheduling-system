<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "zcspc";

// connect to mysqli database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysqli select query
$query = "SELECT * FROM `courses`";

// for method 1

$result1 = mysqli_query($connect, $query);

$query = "SELECT * FROM `courses`";

// for method 2

$result2 = mysqli_query($connect, $query);



$query = "SELECT * FROM `courses`";

// for method 3

$result3 = mysqli_query($connect, $query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/faf20bb39b.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>



<div class="first-page">
    <div class="container">
        <div class="app-header">
            <div class="app-title">
                <img class="landing-logo" src="logo.png" alt="">
                <p>ZCSPC Scheduling System</p>
            </div>
            <button class="btn border-danger" data-bs-toggle="modal" data-bs-target="#loginModal"><span><i class="fas fa-sign-in-alt"></i></span> Log-in</button>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img class="custom-img" src="img.svg" alt="">
            </div>
            <div class="col-md-6">
                <div class="description">
                    <p>
  The purpose of this study is planning and developing system software “Online Scheduling for ZCSPC Admission Office” that aims to support the students in processing their registration, and test schedule to the state also to generate the student’s personal information, family background and the educational background of the aspiring applicants.</p>
                    <button id="login-btn" class="btn btn-lg btn-danger" data-bs-toggle="modal" data-bs-target="#form">Register now!</button>
                </div>
            </div>
        </div>
    </div>
    <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#DDBC55" fill-opacity="1" d="M0,64L40,85.3C80,107,160,149,240,144C320,139,400,85,480,64C560,43,640,53,720,101.3C800,149,880,235,960,234.7C1040,235,1120,149,1200,133.3C1280,117,1360,171,1400,197.3L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
</div>    
 <!-- Modal -->
 <div class="modal fade" id="form" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header app-form-header text-light">
        <img src="logo.png" alt="" class="form-logo">
        <h5 class="modal-title" id="staticBackdropLabel">COLLEGE ADMISSION TEST APPLICATION FORM</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="process.php" method="POST">
           <div class="row">
                <div class="col-md-2">
                    <div class="image-upload">
                                <div class="preview mb-2">
                                    <img alt="" id="file-up-preview">
                                </div>
                                <label for="file-up-1" id="uploadBtn" class="btn btn-primary mx-2">Upload Image</label>
                                <input type="file" name="imageProfile" id="file-up-1" accept="image/*" onchange="showPreview(event);">
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="input-group mb-3 app-type">   
                            <label class="input-group-text" for="inputGroupSelect01">Application Type:</label>
                            <select class="form-select" id="inputGroupSelect01" name="typeofstdnt">
                                <option selected>Freshman</option>
                                <option value="1">Transferee</option>
                                <option value="2">Cross-Enrollee</option>
                                <option value="3">Second Course</option>
                                <option value="4">Shifter</option>
                                <option value="4">Returnee</option>
                            </select>
                    </div>
                    <div class="row">
                            <div class="col-md-12">
                                    <!-- personal information card -->
                                    <div class="card border-dark">
                                        <div class="card-header app-form-subheader">
                                             PERSONAL INFORMATION
                                        </div>
                                        <div class="card-body">
                                            <div class="row g-3">
                                                <div class="col">
                                                    <input type="text" name="firstName" class="form-control" placeholder="First name" aria-label="First name"  required>
                                                </div>
                                                <div class="col">
                                                    <input type="text" name="middleName"  class="form-control" placeholder="Middle name" aria-label="Middle name">
                                                </div>
                                                <div class="col">
                                                    <input type="text" name="lastName" class="form-control" placeholder="Last name" aria-label="Last name">
                                                </div>
                                            </div>
                                            <div class="row g-3 mt-2">
                                                <div class="col">
                                                        <select name="gender_e" id="gender_e"  class="form-select" >
                                                            <option selected disabled>Gender...</option>
                                                            <option value="">Male</option>
                                                            <option value="1">Female</option>
                                                        </select>
                                                </div>
                                                <div class="col">
                                                        <select id="status" name="status" class="form-select">
                                                                    <option selected disabled>Civil Status...</option>
                                                                    <option>Single</option>
                                                                    <option>Married</option>
                                                                    <option>Divorced</option>
                                                                    <option>Widowed</option>
                                                        </select>
                                                </div>
                                                <div class="col">
                                                    <div class="row mb-2">
                                                        <label for="birthday"> Date of Birth:</label>
                                                         <input type="date" id="birthday" name="dateofBrth" class="form-control" aria-label="Last name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3">
                                                    <div class="col">
                                                         <label for="age">Age:</label>
                                                         <input type="number" id="age" name="age" min="10" max="150" value="10">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" name="placeofBrth" class="form-control" placeholder="Place of Birth">
                                                    </div>
                                                    <div class="col">
                                                        <input type="email" name="emailAddress" class="form-control" placeholder="Email Address">
                                                    </div>
                                            </div>
                                            <div class="row g-3">
                                                    <div class="col-4">
                                                        <input type="tel" name="contactNmbr" class="form-control" placeholder="Contact Number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                                                    </div>
                                            </div>
                                            <p>Home Address:</p>
                                            <div class="row g-3">
                                                    <div class="col">
                                                        <input type="text" name="houseNmbr" class="form-control" placeholder="House Number">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" name="street" class="form-control" placeholder="Street">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" name="barangay" class="form-control" placeholder="Barangay">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" name="cityMncplty" class="form-control" placeholder="City/Municipality">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" name="province" class="form-control" placeholder="Province">
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of personal information card -->

                                    <!-- family background card -->
                                    <div class="card mt-2 border-dark">
                                        <div class="card-header app-form-subheader">
                                            FAMILY BACKGROUND
                                        </div>
                                        <div class="card-body">
                                           <div class="row g-3 mb-2">
                                                <div class="col">
                                                    <input type="text" name="fathersNm" class="form-control" placeholder="Father's name">
                                                </div>
                                                <div class="col">
                                                    <input type="text" name="mothersNm" class="form-control" placeholder="Mather's name">
                                                </div>
                                           </div>
                                           <div class="row g-3 mb-2">
                                                <div class="col">
                                                    <input type="text" name="occupationF" class="form-control" placeholder="Occupation">
                                                </div>
                                                <div class="col">
                                                    <input type="text" name="occupationM" class="form-control" placeholder="Occupation">
                                                </div>
                                           </div>
                                           <div class="row g-3 mb-3">
                                                <div class="col">
                                                    <input type="text" name="eLevelF" class="form-control" placeholder="Educational Level">
                                                </div>
                                                <div class="col">
                                                    <input type="text" name="eLevelM" class="form-control" placeholder="Educational Level">
                                                </div>
                                           </div>
                                           <div class="row g-3">
                                                <div class="col pt-md-5">
                                                            <input type="text" name="grdnsName" class="form-control mb-2" placeholder="Guardian's Name">
                                                            <input type="text" name="rGrdian" class="form-control mb-2" placeholder="Relationship">
                                                            <input type="text" name="occupationG" class="form-control mb-2" placeholder="Occupation">
                                                            <input type="text" name="addressG" class="form-control mb-2" placeholder="Address">
                                                </div>
                                                <div class="col">
                                                    <div class="card">
                                                        <div class="card-header bg-secondary text-light">
                                                            Contact Person in case of Emergency
                                                        </div>
                                                        <div class="card-body">
                                                            <input type="text" name="EmrgncyNm" class="form-control mb-2" placeholder="Name">
                                                            <input type="text" name="relationshipE" class="form-control mb-2" placeholder="Relationship">
                                                            <input type="text" name="contactnmbrE" class="form-control mb-2" placeholder="Contact Number">
                                                            <input type="text" name="addressE" class="form-control mb-2" placeholder="Address">
                                                        </div>
                                                    </div>
                                                </div>
                                           </div>
                                    </div>
                            </div>
                             <!-- end of family background card -->
                             <!-- educational background -->
                             <div class="card mt-2 border-dark">
                                <div class="card-header app-form-subheader">
                                    EDUCATIONAL BACKGROUND
                                </div>
                                <div class="card-body">
                                    <input type="text" name="nmofSchool" class="form-control mb-2" placeholder="Name of School Last Attended">
                                    <input type="text" name="addrssofSchl" class="form-control mb-2" placeholder="Address of School Last Attended">
                                    <input type="text" name="courseStrand" class="form-control mb-2" placeholder="Course/Track or Strand Taken">
                                    <div class="row g-3">
                                        <div class="col">
                                            <select id="inputState" name="typeofSchl" class="form-select mb-2">
                                                <option selected disabled>Type of School...</option>
                                                <option>Private</option>
                                                <option>Public</option>
                                            </select>
                                            <div class="card border-secondary mb-2">
                                                <div class="card-body">
                                                    <div class="card-title">Last Attended:</div>
                                                    <div class="checkbox mb-2">
                                                        <label><input name="deped" type="checkbox" value=""> DEPEd-ALS</label>
                                                    </div>
                                                    <div class="checkbox mb-2">
                                                        <label><input name="techvock" type="checkbox" value=""> Tech-Voc School</label>
                                                    </div>
                                                    <input type="text" placeholder="Others" class="form-control mb-2">
                                                    </div>
                                            </div>
                                            <input type="text" name="sport" placeholder="Sports Affliction" class="form-control mb-2">
                                            <input type="text" name="skills" placeholder="Special Takens/Skills" class="form-control mb-2">
                                        </div>
                                        <div class="col">
                                            <label for="date_graduated">Date Graduated/Completed:</label>
                                            <input type="date" name="dateGrad" id="date_graduated" placeholder="Date Graduated" class="form-control mb-2" value="mm/dd/yyyy">
                                            <input type="text" name="lrn" placeholder="Learner's Residence Number (LRN)" class="form-control mb-2">
                                            <input type="text" name="yrlast" placeholder="Year/Semester of Last Attendance" class="form-control mb-2">
                                            <input type="text" name="honors" placeholder="Honors/Awards Received" class="form-control mb-2">
                                            <input type="text" name="ncQuali" placeholder="NC Qualifications" class="form-control mb-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <!-- end of educational background -->
                             <!-- courses applying for card -->
                            <div class="card border-dark mt-2">
                                <div class="card-header app-form-subheader">
                                    COURSE(S) APPLYING FOR
                                </div>
                                <div class="card-body">
                                
                                <select  id="courseFirst" name="courseFirst"  class="form-control">
                                <option selected disabled>First Choice...</option>
                                 <?php while($row1 = mysqli_fetch_array($result1)):;?> 
                                 <option  value="<?php echo $row1[1];?>"><?php echo $row1[2];?></option>

                               <?php endwhile;?>

                             </select>
                
                             <select  id="courseSecond" name="courseSecond"  class="form-control">
                                 <option selected disabled>Second Choice...</option>
                                 <?php while($row1 = mysqli_fetch_array($result2)):;?>
                                 <option placeholder="first choice" value= "<?php echo $row1[1];?>"><?php echo $row1[2];?></option>

                               <?php endwhile;?>

                             </select>
                            
                                <select  id="courseThird" name="courseThird"  class="form-control">
                                <option selected disabled>Third Choice...</option>
                                 <?php while($row1 = mysqli_fetch_array($result3)):;?>
                                 <option  value="<?php echo $row1[1];?>"><?php echo $row1[2];?></option>

                               <?php endwhile;?>

                             </select>
                                </div>
                            </div>
                             <!-- end of courses -->
                    </div>
                    <hr>
                    <label><input type="checkbox" value="agree"> I certify that the information given in the application form is complete and accurate to the best of my knowledge, 
                    you are also consenting that ZCSPC College Admission Office can process your personal data for the purpose of admission.</label>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </div>
    </div>
    </form>
  </div>
</div>
</div>
<!-- end of modal -->


<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header login-header">
        <h5 class="modal-title" id="loginModalLabel"><span><i class="fas fa-user"></i></span> Admin Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      
      <div class="modal-body">  
      <form action="adminlog.php" method="POST">    
       <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
        <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
       </div>
       <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
        <input type="password" name="password" class="form-control" placeholder="Password" aria-label="password" aria-describedby="basic-addon1">
       </div>
      </div>
       <div class="modal-footer">
        <button type="submit" class="btn border-danger" name="submit">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
       </div>
       </form>
    </div>
    
  </div>
</div>
<?php require_once "footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="upload.js"></script>
</body>
</html>