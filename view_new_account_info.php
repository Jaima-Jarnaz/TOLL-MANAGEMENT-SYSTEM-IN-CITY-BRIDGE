<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Information</title>
<style>
 h2 {
    margin: 14px;
    color: aliceblue;}
        .mid_container{
          background-color: #3F51B5;
    padding: 13px;
    width: 59%;
    margin: auto;
    margin-top: 15px;
    padding-bottom: 11%;
    border-style: ridge;
    text-align: center;
    color: aliceblue;
    position:relative;
    }



table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
  margin:auto;
  background-color: #00BCD4;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  color: black;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
h1{text-align:center;}
</style>
</head>
<body>
    <div class="mid_container">
<h1>Accounts Information</h1>
<?php
$connect=mysqli_connect("localhost","root","","toll_db");
$query="SELECT * FROM  tb_new_account_info";
$result=mysqli_query($connect,$query);
echo "<table>
  <tr>
    <th>Name</th>
    <th>Address</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Bank Account No</th>
  </tr>";
while($row=mysqli_fetch_assoc($result)){
   echo "<tr><td>".$row['name']."</td><td>".$row['address']."</td><td>".$row['phone']."</td><td>".$row['email']."</td>
   <td>".$row['bank_account_no']."</td><br></tr>";
}
echo "</table>";

?>
</div>
</body>
</html>
