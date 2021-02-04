<?php  
  
  $conn = mysqli_connect("localhost", "root", "", "zcspc")or die("couldn't connect to the database!");
  
   $typeofstdnt = $_POST['typeofstdnt'];
   $firstName = $_POST['firstName'];
   $middleName= $_POST['middleName'];
   $lastName = $_POST['lastName'];
   $gender_e = $_POST['gender_e'];
   $status = $_POST['status'];
   $dateofBrth = $_POST['dateofBrth'];
   $age = $_POST['age'];
   $placeofBrth= $_POST['placeofBrth'];
   $emailAddress = $_POST['emailAddress'];
   $contactNmber = $_POST['contactNmber'];
   $houseNmber = $_POST['houseNmber'];
   $street = $_POST['street'];
   $barangay = $_POST['barangay'];
   $cityMncplty= $_POST['cityMncplty'];
   $province = $_POST['province'];

   $fathersNm = $_POST['fathersNm'];
   $mothersNm = $_POST['mothersNm'];
   $occupationF = $_POST['occupationF'];
   $occupationM = $_POST['occupationM'];
   $eLevelF = $_POST['eLevelF'];
   $eLevelM = $_POST['eLevelM'];
   $grdnsName = $_POST['grdnsName'];
   $rGrdian = $_POST['rGrdian'];
   $occupationG = $_POST['occupationG'];
   $addressG = $_POST['addressG'];
   $emrgncyNm = $_POST['emrgncyNm'];
   $relationshipE = $_POST['relationshipE'];
   $contactNmbrE = $_POST['contactNmbrE'];
   $addressE= $_POST['addressE'];

   $nmofSchool = $_POST['nmofSchool'];
   $addrssofSchl = $_POST['addrssofSchl'];
   $courseStrand = $_POST['courseStrand'];
   $typeofSchl = $_POST['typeofSchl'];
   $deped= $_POST['deped'];
   $techvock = $_POST['techvock'];
   $sport = $_POST['sport'];
   $skills = $_POST['skills'];
   $dateGrad = $_POST['dateGrad'];
   $lrn = $_POST['lrn'];
   $yrlast = $_POST['yrlast'];
   $honors = $_POST['honors'];
   $ncQuali = $_POST['ncQuali'];

   $courseFirst = $_POST['courseFirst'];
   $courseSecond = $_POST['courseSecond'];
   $courseThird = $_POST['courseThird'];
    
   if(!empty($firstName) || !empty($middleName) || !empty($lastName) || !empty($gender_e) || !empty($status) || !empty($dateofBrth) || !empty($age) || !empty($placeofBrth) || !empty($emailAddress) || !empty($contactNmber))
 {
    $sql= "INSERT INTO examinee_info(typeofStdnt, firstName, middleName, lastName, gender, civilStatus, dateofBirth, age, placeofBirth,emailAddress,contactNumber,houseNumber,street,barangay,cityMunicipal,province)
      VALUES 
     ('$typeofstdnt', '$firstName', '$middleName', '$lastName', '$gender_e', '$status', '$dateofBrth', '$age', '$placeofBrth', '$emailAddress', '$contactNmber', '$houseNmber', '$street', '$barangay', '$cityMncplty', '$province');"; 
     $query = mysqli_query($conn, $sql);
     if($query == 1 ){
      $ins="INSERT INTO family_background(fathersName, occupationF, educationalLevelF, mothersName, occupationM, educationalLevelM, guardianName, relationship, occupationG, addressG, nameEmrgncy, relationshipEmrgncy, contactNumber, address) Values
      ('$fathersNm', '$occupationF', '$eLevelF', '$mothersNm', '$occupationM', '$eLevelM', '$grdnsName ', '$rGrdian ', '$occupationG ', '$addressG', '$emrgncyNm', '$relationshipE', '$contactNmbrE', '$addressE')";
       $query = mysqli_query($conn, $ins);
         if($query==1){
            $insert2 = "INSERT INTO educational_background
            (NMSchllLastattended, address_school, courseTrackStrand, typeofSchool, dateGraduated, 	LRN, yrlastAttndnc,honors,ncQualification,sport,specialTalentSkll)VALUES 
            ('$nmofSchool', '$addrssofSchl', '$courseStrand', '$typeofSchl', '$dateGrad', '$lrn', '$yrlast', '$honors', '$ncQuali', '$sport', '$skills' );";
             $query = mysqli_query($conn, $insert2);
             echo '<script type="text/javascript">
                      alert(" Successfull");
                         location="index.php";
                           </script>';
          
         }
     
    }
    }else{
  echo '<script type="text/javascript">
  alert(" unSuccessfull");
     location="index.php";
       </script>';
}

