<?php
$connect=mysqli_connect("localhost","root","","toll_db");
$sql="INSERT INTO tb_new_account_info(name,address,phone,email,bank_account_no) 
VALUES('$_POST[field1]','$_POST[field2]','$_POST[field3]','$_POST[field4]','$_POST[field5]')";
if(mysqli_query($connect,$sql)){
    echo "New record created successfully";
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}


?>