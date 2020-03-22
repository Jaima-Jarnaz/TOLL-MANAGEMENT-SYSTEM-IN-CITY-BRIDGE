<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Info</title>
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
<h1>Local Toll Issue Information</h1>
<?php
$connect=mysqli_connect("localhost","root","","toll_db");
$query="SELECT * FROM  tb_local";
$result=mysqli_query($connect,$query);
echo "<table>
  <tr>
    <th>class</th>
    <th>Amount</th>
    <th>Date</th>
  </tr>";
while($row=mysqli_fetch_assoc($result)){
   echo "<tr><td>".$row['class']."</td><td>".$row['amount']."</td><td>".$row['date']."</td></tr>";
}
echo "</table>";
?>
</body>
</html>
