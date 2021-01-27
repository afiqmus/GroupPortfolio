<?php 
require_once("connection.php"); 
$status = $statusMsg = ''; 
if(isset($_POST["btnSub4"])){ 
    $status = 'error'; 
    if(!empty($_FILES["mindmap4"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["mindmap4"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        $allowTypes = array('jpg','png','jpeg','gif','PNG','JPEG','JPG'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['mindmap4']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            $insert = $conn->query("INSERT into topic4 (mindmap4) VALUES ('$imgContent')"); 
             
            if($insert){ 
                $status = 'success'; 
                header('location: topic4.php');
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
 
echo $statusMsg; 
?>