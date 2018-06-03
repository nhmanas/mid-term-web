<?php
@include('bagla.php');
?>

<html>
    <head>
        <title>Home Page</title>
        <style>
            .button {
              background-color: #4CAF50; /* Green */
              border: none;
              color: white;
              padding: 6px 12px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              -webkit-transition-duration: 0.4s; /* Safari */
              font-size: 16px;
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
            #bg {
                position: fixed;
                right: 0;
                bottom: 0;
                min-width: 100%; 
                min-height: 100%;
                z-index: -1;
            }
            .content {
                position: fixed;
                bottom: 0;
                background: rgba(0, 0, 0, 0.5);
                color: #f1f1f1;
                width: 100%;
                padding: 50px;
                z-index: 2;
                font-family: "Verdana"
            }

        </style>
    </head>
    <body background="pizza.jpg" style="background-repeat: no-repeat; background-size: cover;">
        <div class="content">
        <a href="customer_login.php">
            <button class="button button1">
                Customer
            </button>
        </a>
        <br><br>
        <a href="admin.php">
            <button class="button button2">
                Administrator
            </button>
        </a>
        </div>
    </body>
</html>
