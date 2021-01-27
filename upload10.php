<?php 
// Include the database configuration file  
require_once("connection.php"); 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["btnSub10"])){ 
    $status = 'error'; 
    if(!empty($_FILES["mindmap10"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["mindmap10"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif','JPEG','PNG','JPG'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['mindmap10']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $conn->query("INSERT into topic10 (mindmap10) VALUES ('$imgContent')"); 
             
            if($insert){ 
                $status = 'success'; 
                header('location: topic10.php');
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
?>