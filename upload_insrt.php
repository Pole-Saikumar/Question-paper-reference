<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName ="qfile";

$conn = mysqli_connect($hostname,$username,$password, $databaseName);

$year= mysqli_real_escape_string($conn,$_POST['year']);
$branch= mysqli_real_escape_string($conn,$_POST['branch']);
$sem= mysqli_real_escape_string($conn,$_POST['sem']);
$subject= mysqli_real_escape_string($conn,$_POST['subject']);
$type = mysqli_real_escape_string($conn,$_POST['type']);
$review= mysqli_real_escape_string($conn,$_POST['review']);

$name=($_FILES['file']['name']);
$tm=($_FILES['file']['tmp_name']);

 $sql = "SELECT year,subject,type FROM uploads WHERE year='$year' AND subject='$subject' AND type='$type'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
    include 'upload.php';
    while($row = $result->fetch_assoc()) {
           echo '<script>alert("file already exists, please upload another")</script>';
     }
}


else {

     if(move_uploaded_file($tm,"uploads/".$name))
     {
                $sql = "INSERT INTO `uploads`(`year`, `branch`, `sem`, `subject`, `type`, `file`, `review`) VALUES ('$year','$branch','$sem','$subject','$type','$name','$review')";

                 $sc=mysqli_query($conn,$sql);

                    if($sc){
                     include 'index.html'; 
                     echo '<script>alert("file inserted into data base")</script>';  
                    }
                    else{
                             echo '<script>alert("something went wrong")</script>';
                    }
     }
}

?>


















<!-- 
// $cont=base64_encode(file_get_contents(addslashes($f)));



               


// 
// $tm= $_FILES['file']['tmp_name'];
// $extension=pathinfo($file,PATHINFO_EXTENSION);



//      if (!in_array($extension,['zip','pdf','docx','rtf'])) {
//            echo "your file must be zip, pdf, docx, rtf ";
//        } 
//        else
//        {
//            if(move_uploaded_file($tm,"uploads/".$file))
//            {
//                 // Insert the user into the database
//             $sql = "INSERT INTO `uploads`(`id`,`year`, `branch`, `sem`, `subject`, `type`, `file`, `review`) VALUES ('','$year','$branch','$sem','$subject','$type','$file','$review')";
//              $sc=mysqli_query($conn,$sql);

//                 if($sc){
//                  include 'index.html';  
//                 }
//                 else{
//                  echo "error";
//                 }
//            }
//        }
//         //$sql="DELETE FROM users where '$Student_Name'='bunny';";
        



 -->
<!-- create table uploads(
    year integer not null,
    branch varchar(32) not null,
    sem varchar(32) not null,
    subject varchar(32) not null,
    type varchar(32) not null,
    file blob not null,
    review varchar(256) null,
    primary key(year,branch,sem,subject)
    ); -->

    <!-- create table uploads(
    id integer not null AUTO_INCREMENT primary key,
    year integer not null,
    branch varchar(32) not null,
    sem varchar(32) not null,
    subject varchar(32) not null,
    type varchar(32) not null,
    file blob not null,
    review varchar(256) null
    ) -->

   


