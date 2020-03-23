<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>New Account</title>
    <style>
        .pay_bar_button{
            width: 20%;
    padding: 8px;
    margin: 13px;
    font-size: medium;
    font-family: inherit;
    background-color: #00BCD4;
    color: #0a0e13;
    text-decoration: none;
    border-radius: 11px;
    }
    </style>
</head>
<body>
    <div class="form-style-8">
        <h2>Account Info</h2>
        <form action="accountconnection.php" method="post">
          <input type="text"  name="field1" placeholder="Name" />
          <input type="text"  name="field2" placeholder="Address" />
          <input type="text"   name="field3" placeholder="Phone" />
          <input type="email"   name="field4" placeholder="Email" />
          <input type="text"   name="field5" placeholder="Bank Account_no" />
          <input type="submit" value="Submit" />
          <a  href="view_new_account_info.php"class="pay_bar_button">View</a>
         
         
        </form>
      </div>
</body>
</html>