<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "zcspc";

// connect to mysqli database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysqli select query
$query = "SELECT count(id) AS total FROM examinee_info";

// for method 1

$result1 = mysqli_query($connect, $query);
$values= mysqli_fetch_assoc($result1);
$num_rows =$values['total'];

$query2 = "SELECT count(courseTrackStrand) AS total FROM educational_background";

// for method 1

$result2 = mysqli_query($connect, $query);
$values2= mysqli_fetch_assoc($result2);
$num_row2 =$values['total'];



?>
<?php session_start();?>
<?php require_once "nav.php"; ?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
           <span><i class="fas fa-chart-line"></i></span> Dashboard
        </div>
        <div class="card-body">

            <div class="row justify-content-center">
                <div class="col-md-3">

                        <div class="card border-dark count-card">
                            <div class="card-body">
                            
                                <div class="row justify-content-center">
                                    <div class="col-4">
                                        <h1><span class="image"><i class="fas fa-user"></i></span></h1>
                                    </div>
                                    <div class="col-8">
                                        <h2 class="count"><?php echo $num_rows/2?></h2>
                                        <h3>College</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                </div>
                <div class="col-md-3">

                        <div class="card border-dark count-card">
                            <div class="card-body">
                            
                                <div class="row justify-content-center">
                                    <div class="col-4">
                                        <h1><span class="image"><i class="fas fa-user"></i></span></h1>
                                    </div>
                                    <div class="col-8">
                                        <h2 class="count"><?php echo $num_row2/2?></h2>
                                        <h4>Senior High</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                </div>

            </div>

        </div>
    </div>
    <!-- table -->
    <div class="card mt-3">
        <div class="card-header">
            Recently Registered
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <?php
     echo "<tr>
            <td>";
               // your database connection
         $host       = "localhost"; 
               $username   = "root"; 
               $password   = "";
               $database   = "zcspc"; 
         
               // select database
         $conn = mysqli_connect($host,$username,$password,$database) or die(mysqli_error()); 

                    $query = ("SELECT * FROM examinee_info");
                    $result = mysqli_query($conn,$query) or die(mysqli_error());
                    echo "<div class='container'><table width='' class='table table-bordered table-light' border='0.1' >
                            <tr>
                                <th>name</th>
                                <th>middle</th>
                                 <th>last</th>
                            </tr>";
                        while($row = mysqli_fetch_array($result))
                        {
                        echo "<tr>";
                        echo "<td>" . $row['firstName'] . "</td>";
                        echo "<td>" . $row['middleName'] . "</td>";
                        echo "<td>" . $row['lastName'] . "</td>";
                        echo "</tr>";
                        }
                    echo "</table>";

            echo "</td>           
        </tr>";
  ?>

             </div>
        </div>
    </div>
    <!-- end of tahble -->
</div>
</body>
</html>