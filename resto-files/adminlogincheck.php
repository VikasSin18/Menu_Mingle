<?php

 $email=$_POST['email'];
 $password=$_POST['password'];

 if($password==='vikas')
 {
    header("Location:./admin.php");
 }

 else{
    echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert"> 
        <strong>Error!</strong> '. $showError.'
    
       <button type="button" class="close" 
            data-dismiss="alert aria-label="Close">
            <span aria-hidden="true">×</span> 
       </button> 
     </div> '; 
     header("Location:./adminlogin.php");
 }

?>