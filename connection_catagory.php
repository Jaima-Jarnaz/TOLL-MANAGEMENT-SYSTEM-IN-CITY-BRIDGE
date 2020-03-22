<?php
$connect=mysqli_connect("localhost","root","","toll_db");
        
$sql="INSERT INTO tb_catagory(class,vehicle,tk) 
VALUES('$_POST[class]','$_POST[field2]','$_POST[field3]')";
if(mysqli_query($connect,$sql)){
    echo "<h1>New record created successfully</h1>";
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}



?>