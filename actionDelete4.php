<?php 

        require_once("connection.php ");

        if(isset($_GET['Del']))
        {
            $no = $_GET['Del'];
            $query = " delete from topic4 where no = '".$no."'";
            $result = mysqli_query($conn,$query);

            if($result)
            {
                header("location:topic4.php");
            }
            else
            {
                echo ' Please Check Your Query ';
            }
        }
        else
        {
            header("location:topic4.php");
        }

?>