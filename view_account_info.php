<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Toll Info</title>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
  margin:auto;
  background-color: #8BC34A;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
h1{text-align:center;}
</style>
</head>
<body>
<h1>Accounts Toll Issue Information</h1>
<?php
$connect=mysqli_connect("localhost","root","","toll_db");
$query="SELECT * FROM  tb_account";
$result=mysqli_query($connect,$query);
echo "<table>
  <tr>
    <th>Account No</th>
    <th>Class</th>
    <th>Payment</th>
    <th>Due</th>
    <th>Date</th>
  </tr>";
while($row=mysqli_fetch_assoc($result)){
   echo "<tr><td>".$row['account_no']."</td><td>".$row['class']."</td><td>".$row['payment']."</td><td>".$row['due']."</td>
   <td>".$row['date']."</td><br></tr>";
}
echo "</table>";

?>
</body>
</html>
