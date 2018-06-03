<?php 
@include ('bagla.php');
?>
<html>
    <head>
        <title>Pre-order</title>
        <style>
            .button {
              background-color: #4CAF50; /* Green */
              border: none;
              color: white;
              padding: 4px 15px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              -webkit-transition-duration: 0.4s; /* Safari */
              font-size: 14 px;
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
        <p>Welcome to CSE216 pizza ordering website. Please choose your region and type of ordering.</p>
        <p>
            Regions:
            <br>
            <form action="order.php" method="post">
                <input type="checkbox" name="region[]" value="pozcu"> Pozcu
                <input type="checkbox" name="region[]" value="mezitli"> Mezitli
                <input type="checkbox" name="region[]" value="torosUni"> Toros University
                <input type="checkbox" name="region[]" value="others"> Others <br><br>
                Type of Ordering: <br><br>
                <input type="checkbox" name="orderType[]" value="pizza"> Pizza
                <input type="checkbox" name="orderType[]" value="beverage"> Beverage
                <input type="checkbox" name="orderType[]" value="dessert"> Dessert <br><br>
                <button class="button button1" name="next" id="next" type="submit">Next</button>
            </form>
        </p>
        </div>
    </body>
</html>
