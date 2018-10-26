<?php
if (isset($_POST['submit'])){
    $file = $_FILES['file'];
      
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
            if ($fileSize < 10000000){
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: userproduct.php?uploadsucces");
            }else{
               echo "Uw bestand is te groot";
            }
        }else{
            echo "Oops Er ging iets fout, probeer het nog een keer";
        }
    }else {
        echo "Sorry, je kan dit soort files niet uploaden(alleen jpg, jpeg en png word geaccepteerd)";
    }
    
}
?>