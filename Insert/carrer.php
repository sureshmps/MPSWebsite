<?php 
require("Connection.php");

$jobposition = $_POST['JobPosition'];
$firstname = $_POST['firstName'];
$lasttname = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$employer = $_POST['employer'];
$experience = $_POST['experience'];
$education = $_POST['education'];
$presentsalary = $_POST['presentSalary'];
$expectedsalary = $_POST['expectedSalary'];
$resumelink = $_POST['resumeLink'];
$newFileName = 'No Resume Uploaded';

if (isset($_FILES['resume']) && $_FILES['resume']['error'] === UPLOAD_ERR_OK) {
    // Get the uploaded file details
    $fileTmpPath = $_FILES['resume']['tmp_name'];
    $fileName = $_FILES['resume']['name'];
    $fileSize = $_FILES['resume']['size'];
    $fileType = $_FILES['resume']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // Set the new file name
    $newFileName = $firstname. '_Resume.' . $fileExtension;

    // Specify the directory where the file will be moved
    $uploadFileDir = './uploaded_Resumes/';
    $dest_path = $uploadFileDir . $newFileName;

    // Create the directory if it does not exist
    if (!is_dir($uploadFileDir)) {
        mkdir($uploadFileDir, 0777, true);
    }

    // Move the file to the new location
    if(move_uploaded_file($fileTmpPath, $dest_path)) {
        
    } else {
        $newFileName = 'Resume Uploading Failed';
    }
}





$q = mysqli_query($con, "INSERT INTO `Career_FormData`(`JobPosition`, `FirstName`, `LastName`, `Email`, `Mobile`, `DateOfBirth`, `CurrentEmployer`, `Experience`, `EducationQualification`, `PresentSalery`, `ExpectedSalery`, `ResumeExternalUrl`, `ResumePDF`) 
VALUES ('$jobposition','$firstname','$lasttname','$email','$phone','$dob','$employer','$experience','$education','$presentsalary','$expectedsalary','$resumelink','$newFileName')");
if($q==TRUE){
    //echo "<script>alert('Thanks for Connecting with us.')</script>";
    header('Location: ../career?msg=true');
}else{
    //echo "<script>alert('Somethig Went Wrong.')</script>";
    header('Location: ../career?msg=true');
}
?>