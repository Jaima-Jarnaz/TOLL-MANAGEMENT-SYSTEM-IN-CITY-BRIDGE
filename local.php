<?php
$connect=mysqli_connect("localhost","root","","toll_db");
$sql="INSERT INTO tb_local(class,amount,date) 
VALUES('$_POST[class]','$_POST[amount]','$_POST[date]')";
if(mysqli_query($connect,$sql)){
    echo "New record created successfully";
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>