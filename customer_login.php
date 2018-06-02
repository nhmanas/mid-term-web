<?php
@include ('bagla.php');
if(isset($_POST['customer_number'])){
  $id = @$_POST['customer_number'];
  $sql = "SELECT * FROM users WHERE id = '".$id."' ";
  $result = $mydb->query($sql);

  if ($result->num_rows > 0) {
    header("Location: ./region.php");
  } else {
      echo "no results";
  }
}

if(isset($_POST['username']) || isset($_POST['$address'])){

  $username = @$_POST['username'];
  $address = @$_POST['address'];
  if(strlen($username) > 0 && strlen($address) > 0){
    $sql = "INSERT INTO users (username, address) VALUES ('".$username."', '".$address."')";

    if ($mydb->query($sql) === TRUE) {
        echo "record success";
    } else {
        echo "Error: " . $sql . "<br>" . $mydb->error;
    }
    $mydb->close();
  }else{
    echo 'bos alan var';
  }

}
?>
<html>
    <head>
        <title>Register / Login</title>
        <style>
            .button {
              background-color: #4CAF50; /* Green */
              border: none;
              color: white;
              padding: 2px 4px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              -webkit-transition-duration: 0.4s; /* Safari */
              font-size: 14px;
            }
            .button1 {
                background-color: white; 
                color: black; 
                border: 2px solid #4CAF50;
            }

            .button1:hover {
                background-color: #4CAF50;
                color: white;
            }
            .button2 {
              background-color: white; 
              color: black; 
              border: 2px solid #008CBA;
            }

            .button2:hover {
                background-color: #008CBA;
                color: white;
            }
            .bodysmall{
              margin-top: 300px
            }
            body {
              font-family: "Verdana"
            }
        </style>
    </head>
    <body class="bodysmall">
        <center>
        <p>Customer number:
            <form class="" action="region.php" method="post">
              <input action="" type="text" name="customer_number">
              <br>
              <button class="button button1"type="submit" name="btn_customer_number">Login</button>
            </form>
            <br>
            <strong>If you visit our website for the first time please register: </strong>
            <br>
            <form action="customer.php" method="post">
              Username: <input type="text" name="username">
              <br>Adress: <input type="text" name="address">
              <br><button class="button button2" type="submit" name="btn_register">Register</button>
            </form>
        </p>
        </center>
    </body>
</html>
