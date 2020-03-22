<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catagory</title>
    <style>
       h1 {
    margin-top: 30px;
    color:#a2f403;
} 
.mid_container{
    background-color: #3F51B5;
    padding: 13px;
    width: 59%;
    margin: auto;
    margin-top: 15px;
    padding-bottom: 5%;
    border-style: ridge;
    text-align: center;
    position:relative;
    }
    .pay_bar input{
      width: 65%;
    padding: 8px;
    margin: auto;
    font-size: large;
    font-family: inherit;
    border-style: ridge;
    }
    .pay_bar_button{
        width: 14%;
    padding: 7px;
    margin: 20px;
    font-size: large;
    font-family: inherit;
    border-style: groove;
    background-color: #FFEB3B;
    color: #0a0e13;
    font-weight: 800;
    position: absolute;
    top: 0;
    right: 0;
   text-decoration:none;
    }
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 78%;
  margin:auto;
  background-color: #a8c8e2;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #dddddd;
}
 </style>
</head>

<body>
    <div class="mid_container">
    <h1>Catagory Information</h1><hr>
<?php
$connect=mysqli_connect("localhost","root","","toll_db");
$query="SELECT * FROM  tb_catagory";
$result=mysqli_query($connect,$query);
echo "<table>
  <tr>
    <th>Class</th>
    <th>Vehicle</th>
    <th>TK for each vehicle</th>
  </tr>";
while($row=mysqli_fetch_assoc($result)){
   echo "<tr><td>".$row['class']."</td><td>".$row['vehicle']."</td><td>".$row['tk']."</td><br></tr>";
}
echo "</table>";

?>
<a class="pay_bar_button" href="classform.php">New Catagory</a>

    </div>
    
</body>
</html>