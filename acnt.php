<?php
$connect=mysqli_connect("localhost","root","","toll_db");
$sql="INSERT INTO tb_account(account_no,class,payment,due,date) 
VALUES('$_POST[field1]','$_POST[class]','$_POST[field2]','$_POST[field3]','$_POST[field4]')";
if(mysqli_query($connect,$sql)){
    echo "New record created successfully";
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}


?>