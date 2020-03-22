<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <title>Payment</title>
   <style>
       h2 {
    margin: 14px;
    color:#a2f403;
} .mid_container{
          background-color: #3F51B5;
    padding: 13px;
    width: 59%;
    margin: auto;
    margin-top: 15px;
    padding-bottom: 11%;
    border-style: ridge;
    text-align: center;
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
    .pay_bar button{
      width: 15%;
    padding: 8px;
    margin: auto;
    font-size: large;
    font-family: inherit;
    border-style: groove;
    background-color: #8BC34A;
    color: #0a0e13;
    font-weight: 800;
    }
   </style>
</head>
<body>
<div class="mid_container">
   <h2>Generate Receipt</h2>
   <form  class="pay_bar"  method="post" action="receipt.php">
  <input type="text" placeholder="Enter Account No.." name="accountno"><br><br>
  <input type="date" placeholder="date" name="date"><br><br>
  <button type="submit" value="submit">Enter</button>
</form>
</div>
   
</body>
</html>