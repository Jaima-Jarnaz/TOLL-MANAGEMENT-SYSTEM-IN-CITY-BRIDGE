<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    .pay_bar{
      width: 70%;
    margin: auto;
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
      width: 10%;
    padding: 8px;
    margin: 20px;
    font-size: large;
    font-family: inherit;
    border-style: groove;
    background-color: #8BC34A;
    color: #0a0e13;
    font-weight: 800;
    position: absolute;
    bottom: 0;
    right: 0;
    }
    table {
    border-collapse: collapse;
    width: 73%;
    margin: auto;
    margin-top: 60px;
}

th, td {
    padding: 30px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
   </style>
</head>
<body>
    

<?php
$connect=mysqli_connect("localhost","root","","toll_db");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["accountno"])||empty($_POST["date"])) {
    die("<h1>Account No/date  is required...</h1>");
    } else {
       $accountno=$_POST["accountno"];
       $date1=$_POST["date"];
      }
    }
  
 $query="SELECT * FROM  tb_account  where  account_no='$accountno'";
 $sql="SELECT * FROM tb_account  WHERE date='$date1'";
 //$sql="SELECT account_no,date,payment FROM tb_account where account_no='$accountno'";

 $result=mysqli_query($connect,$query);
 $result2=mysqli_query($connect,$sql);

 $rowcount=mysqli_num_rows($result2);


if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_array($result)){
  $account=$row['account_no'];
  $due=$row['due'];
  if($rowcount>5){

    $payment="No Payment";
}
else{
    $payment=$row['payment'];
}
}
}

else{
    die("<h1>Account_No Not Matched</h1>");
}
?>

<div class="mid_container">
<h2> Receipt</h2>
<?php
echo "<table>
  <th>Account No</th>
  <th>Toll Payment</th>
  <th>Date</th>
  <th>Due</th>";
echo "<tr><td>".$account."</td><td>".$payment."</td><td>".$date1."</td><td>".$due."</td></tr>";
echo "</table>";
?>
  <button class="pay_bar_button" type="submit" value="submit">Print</button>
</div>
</body>
</html>