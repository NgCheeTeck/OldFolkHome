<?php 

session_start();

if(!empty($_GET['file'])){
    $fileName  = basename($_GET['file']);
    $filePath  = $fileName;
  
    if(!empty($fileName) && file_exists($filePath)){
        
        //define header
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");

        //read file 
        readfile($filePath);
        exit;
    }
    else{
        echo "file not exit";
    }
} else{
        echo '<script>alert("No File Upload.\\n\\nGoing back to previous page.")</script>';
        header("refresh:0; url=http://localhost/OldFolkHome/AnnualReport/ViewAnnualReport/ViewAnnualReport.php");

}


?>




